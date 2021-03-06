stupidQuestion
================================================================================

Userfriendly Captcha for MODX Revolution

Features:
--------------------------------------------------------------------------------
StupidQuestion is a simple but effective and userfriendly captcha solution for 
FormIt. A stupid question (i.e. 'What is the given name of Albert Einstein?') 
is inserted in the form template. The form field is filled and hidden by a 
javascript that is packed by a javascript packer. The packer scrambles the code 
and because of the input name contains different counts of hyphens the right 
answer is not placed at the same position. The filling bots have to execute 
javascript - a lot don't do that.

Installation:
--------------------------------------------------------------------------------
MODX Package Management

Usage
--------------------------------------------------------------------------------

The snippet has to be used as FormIt preHook and hook.

[[!FormIt? &preHooks=`StupidQuestion` ...

with the following properties

Property                 | Description                  | Default
------------------------ | -----------------------------| -------
stupidQuestionAnswers    | Answers for the stupid       | language dependent
                         | question - JSON encoded      |
                         | array of forename name       |
                         |                combinations  |
stupidQuestionLanguage   | Language of the question     | en
stupidQuestionFormcode   | Template chunk for the       | content of the file
                         | stupid question html form    | formcode.template.html
                         | field                        |
stupidQuestionScriptcode | Template chunk for the       | content of the file
                         | filling javascript           | jscode.template.js
stupidQuestionRegister   | Move the filling javascript  | false
                         | to the end of the html body  |
stupidQuestionNoScript   | Remove the filling           | false
                         | javascript                   |

If you want to change the html code for the stupid question form field, put 
this default code in a chunk and modify it:

<div>
	<label for="[[+id]]">[[+question]]</label>
	<input type="text" name="[[+id]]" id="[[+id]]" [[!+fi.error.[[+id]]:notempty=`class="error"`]]/><span class="small">([[+required]])</span>[[!+fi.error.[[+id]]]]<br />
</div>

If you want to change the answers you could use this english lexicon setting as
example:

["Charlie Chaplin", "Albert Einstein", "Mary Smith", "Whoopi Goldberg"]

All language specific strings could be changed by editing the lexicon entries
in the stupidquestion namespace. Use the existing placeholders in these entries.

Don't forget to place the [[!+formit.stupidquestion_html]] placeholder in the
form code.

Notes:
--------------------------------------------------------------------------------
1. Uses: PHP packer implementation on 
   http://joliclic.free.fr/php/javascript-packer/en/
2. Bases on a captcha idea of Peter Kröner: 
   http://www.peterkroener.de/dumme-frage-captchas-automatisch-ausfuellen/
