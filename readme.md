# Project 5 - Encryption

Time spent: **10** hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [x]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [?]  Required: Decrypt the government message
  * [x]  Required: Encrypt a response and include in this README
    * 8TThxrIfhSgv7qlNkxYG6d9bVuhhF5nGTR9+wM2GfiE=
    * I used Thursday key

3\. Generate Public-Private Keys
  * [x]  Required: Repair the key generator code
  * [x]  Required: Generate keys for "johnsteed" and add him to the Agent Directory

4\. Asymmetric Encrypt/Decrypt
  * [x]  Required: Repair the asymmetric encrypt and decrypt code

5\. Create/Verify Signature
  * [x]  Required: Repair the create and verify signature code

6\. Encrypted Message 2
  * [x]  Required: Decrypt the message
   * Cannot access APEX from this location. Send new agent codename and public key so I can contact. Encrypt response to protect codename. Include signature to verify identity and message integrity. -- sydneybristow
  * [x]  Required: Verify the message
   * NOT VALID!!!
  * [x]  Required: Include a response message in this README
   * NICE TRY DARK SHADOW BUT THIS IS A FAKE MESSAGE

7\. Agent Messages
  * [x]  Required: Repair the dropbox code
  * [x]  Required: Repair the messages area
  * [x]  Required: Display encrypted messages for all agents
  * [x]  Required: Messages indicate whether the message signature is valid
  * [x]  Required: Your messages are automatically decrypted

8\. Identify the Double Agent
  * [x]  Required: Decrypt as many email messages as possible
    * email_01 A friend to DS: The SQL injection we discussed is in place. Just search for an agent.
      * VALID using friend_pub_key
    * email_02 DS to a friend:
      * VALID using ds_pub_key
    * email_03 A friend to DS: Today I was able to sneak several XSS vulnerabilities onto one of the encrypt/decrypt pages.
      * VALID using friend_pub_key
    * email_04 DS to a friend:
      * VALID using ds_pub_key
    * email_05 A friend to DS: Let me know before you go inside. I'll create a distraction. - Austin
      * INVALID using friend_pub_key - wow someone tryna frame Austin
    * email_06 A friend to DS: Let me know before you go inside. I'll create a distraction. - Natasha
      * VALID using friend_pub_key
  * [x]  Required: Identify the double agent: NATASHA!!!

The following objectives are **optional**:

* Bonus Objective 1\.
  * [x]  Track down the bugs in the code and fix them.

* Bonus Objective 2\.
  * [x]  Write a report of your discoveries (longer than 300 characters).
    * I learned that for symmetric cryptography, there is a key and we use it to encrypt (lock) and decrypt (unlock) cipher texts. I learned that for asymmetric cryptography, there's a public key that acts like half of a key (distorts the plain text) and a private key that is like the other half of the key that unlocks the message (decrypts cipher text back to plain text).
  * [x]  Compose a secure email for sending over an insecure network.
  * [x]  Include the email with your encrypted report in this README.
    * part i:
      * Message:  jXKFGNg0yhpc5os5IJXCXWdCwPlXhmCtm4wzRXXq9/o0CSHo75RFVt/ntIHPGv7/Vox2Ah5Cd8ddJvdhDZWl6WenTBJMOLECB75nxyulJRgnTP8cFt781wOl2b4+oX4t8xvGw05//kSA0moY/ByVfTQnHPQLuqa4kSVYG5nH5s6IUnNE+Dn2hMLY1or/j+bICq+rHuP5SPcHM0DZKZK4LfuKZe8yQ+0qu/4JI1K9BAM1bP5H3E6/K1U62aKp9W9d3+xR4kEu7CAuoiCqHwjRO7ZCAXtqti26GYdcv4rui1Fep4kIyxHqmNo2YMZYx9NaZPVGZuDT6ddMlMZmRCTKVw==
      * Signature: ltJXVJDOLCemzYcCrnVciuIo8BjrUbtU0SsQ3V/eYm1pJ/kNFvXsg9Y4rlN9CZthQ6BCmDZc/1tn8RWxDImjpx7V5+H7qp3XJXw43N9yaBqvnVunh8k0cGAsqbEV277z+c0rK2L8WatUKS1SE/zaZp+wrrTq3rufpUOQFiHQRSYKzw3igMnQ55RGGJgEA08KkBInZJZ/iDSmvEB8XkT78H44W4ITi69CU3RYiLOFWlGLgZVvJXzgfpNRB+bscge0CdQa26MLSq0P/Z6c3kA/KqGZEWEms2DldZRxu/1GVLbuMwsiCbmTUSeJ+2t0IHv9BmO0rmkvHhFZpQu1s7NqPg==

    * part ii:
      * Message: FFippAHTSNB/z1Cx1emA3TKjy8idBrgJUD9gHmH8YFijy2sqeCjudeDqaI3QNG5CcDPoAMgiD2duWrBJf/VdnsFDJMxooAdwx5vAIcl131UWic4VFQjsH7hcgZ1ftS5Agfwq1VIr+gJGBGfq1OC0ffDI/zDlUlLVJn+oFoWyXA009h+u08rZs5ofNxkHLPR24QQlKltExlzrVfTjz6wC9vSQHZUWl0lkiVJW2OZ4S2tp8IfQjv8AEEXIPK40MXyfrdjOi8URlNnrunUVP9b32Xk5CG5Erz8kNO+APNPwjpVSqln5DFINgYVAlZzsrZAoNrMX6Ii+DpMvjOB0viykAA==
      * Signature: eaBZwJSEEZtsfsgQyfBlhYSAP20Bo0taSTgjk7e6BHcr863i5bYC9SyCeQAqK1aINeXIdBEC6uA/cVJlL1fkAYCrp788kvlV9jQsC/g3QctBHD880jJjWIjnLNgS0q/fT012NQ3NV+RmIsWtpsjVDK4wlT4NKGkvJ2FfKpju1/vxoEF2581LN6/crtIaPb9PMexFDnKdfrtkGg5H3V8aRK1vLOYPmWDu/+TZePvcMTb7Qo69wtctnFp5A23oqTCNwVGFvC33/kXbylt080+JVOJ4z+Xa0xKqFAhTKNU8aPgiK3dFc/h9idoDcz7d0nGaDg27sxxrh501iWE7OW0NcQ==

    * agent99 pub key:

-----BEGIN PUBLIC KEY-----
MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAyKNvqGv5ROD2h3HQLJTE
U/MDNGrBMSEfIzftA4hUtsSGgngN1cpYuaQbt93rkzNbxvV11oN0laHrXMpB35Gw
IZyd5pSLYJovWGeW6PAX4T2z313prdTktbiixr39exqMDuKnnBIq4qHmbHozgL6P
kBHCY8DcnfR44v3cjb/G76SstVuoEsEoBDrMXgXzR/5y7iPJ+Lbia8UgT6sccGB3
FrPeXgJtaXd0lW2CQFYMOFdZeNfF5Wz/vpig5OMshFQjhydXjJmYUqFrOiK2ZUYT
sz0HV3pYEuDU8u0hjS/qaguenh6L7RjVQAKWXg2/suZ3JZf1cdxayDUz5fl+Bdjt
xwIDAQAB
-----END PUBLIC KEY-----

* Bonus Objective 3\.
  * [x]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [x]  Add support for other symmetric algorithms.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://imgur.com/a/PklyZ' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.
