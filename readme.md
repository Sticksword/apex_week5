# Project 5 - Encryption

Time spent: **10** hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [x]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [ ]  Required: Decrypt the government message
  * [ ]  Required: Encrypt a response and include in this README

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
  * [ ]  Write a report of your discoveries (longer than 300 characters).
  * [ ]  Compose a secure email for sending over an insecure network.
  * [ ]  Include the email with your encrypted report in this README.

* Bonus Objective 3\.
  * [ ]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [ ]  Add support for other symmetric algorithms.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/link/to/your/gif/file.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.
