UPDATE `help` SET `detail` = '[<font class=bodyhighlight>DATE</font>] Date payment is due.<br>[<font class=bodyhighlight>SENTDATE</font>] Date invoice was last sent.<br>[<font class=bodyhighlight>CLIENTNAME</font>] <br>[<font class=bodyhighlight>FIRSTNAME</font>] <br>[<font class=bodyhighlight>CLIENTEMAIL</font>] <br>[<font class=bodyhighlight>CLIENTNUMBER</font>]<br/>[<font class=bodyhighlight>INVOICENUMBER</font>]<br/>[<font class=bodyhighlight>DIRECTPAYMENTLINK</font>]<br/>Add direct link for invoice payment. Only visible for applicable plugins that support this method of payment. [<font class=bodyhighlight>INVOICEHASH</font>] A hash for the invoice in case you need to send one.<br>[<font class=bodyhighlight>INVOICEDESCRIPTION</font>]<br>[<font class=bodyhighlight>TAX</font>]<br>[<font class=bodyhighlight>AMOUNT_EX_TAX</font>] The total price excluding taxes.<br>[<font class=bodyhighlight>AMOUNT</font>] The total price due.<br>[<font class=bodyhighlight>PAID</font>] The amount already paid of the invoice.<br>[<font class=bodyhighlight>BALANCEDUE</font>] The balance due of the invoice.<br>[<font class=bodyhighlight>RAW_AMOUNT</font>] The total price excluding currency symbol.<br>[<font class=bodyhighlight>PMTREFERENCE</font>] The value used in the payment reference field of the invoice.<br>[<font class=bodyhighlight>PMTTRANSACTIONS</font>] The transactions applied to the invoice.<br>[<font class=bodyhighlight>CLIENTAPPLICATIONURL</font>] URL to ClientExec.<br>[<font class=bodyhighlight>FORGOTPASSWORDURL</font>] URL to retrieve forgotten password.<BR>[<font class=bodyhighlight>COMPANYNAME</font>] <BR>[<font class=bodyhighlight>COMPANYADDRESS</font>] <BR>[<font class=bodyhighlight>BILLINGEMAIL</font>] E-mail address for billing inquiries<br>[<font class=bodyhighlight>CUSTOMPROFILE_xxxx</font>]<br>where xxx is a profile custom field name' WHERE `title` = 'Invoice Template Tags';