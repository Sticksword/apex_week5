<?php

// Symmetric Encryption

// Cipher method to use for symmetric encryption
define("CIPHER_METHOD", "AES-256-CBC");

function key_encrypt($plaintext, $key, $cipher_method=CIPHER_METHOD) {
  // Create an initialization vector which randomizes the
  // initial settings of the algorithm, making it harder to decrypt.
  // Start by finding the correct size of an initialization vector
  // for this cipher method.
  $iv_length = openssl_cipher_iv_length(CIPHER_METHOD);
  $iv = openssl_random_pseudo_bytes($iv_length);
  // Encrypt
  $encrypted = openssl_encrypt($plaintext, $cipher_method, $key, OPENSSL_RAW_DATA, $iv);
  // Return $iv at front of string, need it for decoding
  $message = $iv . $encrypted;
  // Encode just ensures encrypted characters are viewable/savable
  return base64_encode($message);
}

function key_decrypt($message, $key, $cipher_method=CIPHER_METHOD) {
  // Base64 decode before decrypting
  $iv_with_ciphertext = base64_decode($message);
  // Separate initialization vector and encrypted string
  $iv_length = openssl_cipher_iv_length(CIPHER_METHOD);
  $iv = substr($iv_with_ciphertext, 0, $iv_length);
  $ciphertext = substr($iv_with_ciphertext, $iv_length);
  // Decrypt
  $plaintext = openssl_decrypt($ciphertext, $cipher_method, $key, OPENSSL_RAW_DATA, $iv);
  return $plaintext;
}


// Asymmetric Encryption / Public-Key Cryptography

// Cipher configuration to use for asymmetric encryption
const PUBLIC_KEY_CONFIG = array(
    "digest_alg" => "sha512",
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);

function generate_keys($config=PUBLIC_KEY_CONFIG) {
  $resource = openssl_pkey_new($config);

  // Extract private key from the pair
  openssl_pkey_export($resource, $private_key);

  // Extract public key from the pair
  $key_details = openssl_pkey_get_details($resource);
  $public_key = $key_details["key"];

  return array('private' => $private_key, 'public' => $public_key);
}

function pkey_encrypt($plaintext, $public_key) {
  openssl_public_encrypt($plaintext, $encrypted, $public_key);

  // Use base64_encode to make contents viewable/sharable
  return base64_encode($encrypted);
}

function pkey_decrypt($message, $private_key) {
  // Decode from base64 to get raw data
  $ciphertext = base64_decode($message);

  openssl_private_decrypt($ciphertext, $decrypted, $private_key);

  return $decrypted;
}


// Digital signatures using public/private keys

function create_signature($data, $private_key) {
  openssl_sign($data, $raw_signature, $private_key);

  // Use base64_encode to make contents viewable/sharable
  $signature = base64_encode($raw_signature);
  return $signature;
}

function verify_signature($data, $signature, $public_key) {
  $raw_signature = base64_decode($signature);
  $result = openssl_verify($data, $raw_signature, $public_key);
  return $result;
  // returns 1 if data and signature match, 0 otherwise
}

// $string = "Give me a checksum.";
//
// echo crc32($string);
// // 3703541059
//
// echo md5($string);
// // cfa5d275b53523cc6b393b4b76da2da7
//
// echo sha1($string);
// // b813c8d640644c451d3a45b628a6ebbe60fbb9ba

function calculate_checksum($data) {
  return sha1($data);
}

?>
