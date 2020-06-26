2020-06-26 07:50

# running php upgrade upgrade see: https://github.com/silverstripe/silverstripe-upgrader
cd /var/www/upgrades/contact_list
php /var/www/upgrader/vendor/silverstripe/upgrader/bin/upgrade-code upgrade /var/www/upgrades/contact_list/contact_list  --root-dir=/var/www/upgrades/contact_list --write -vvv
Writing changes for 7 files
Running upgrades on "/var/www/upgrades/contact_list/contact_list"
[2020-06-26 07:50:55] Applying RenameClasses to ContactListTest.php...
[2020-06-26 07:50:55] Applying ClassToTraitRule to ContactListTest.php...
[2020-06-26 07:50:55] Applying RenameClasses to ContactListPage.php...
[2020-06-26 07:50:55] Applying ClassToTraitRule to ContactListPage.php...
[2020-06-26 07:50:55] Applying RenameClasses to ContactModelAdmin.php...
[2020-06-26 07:50:55] Applying ClassToTraitRule to ContactModelAdmin.php...
[2020-06-26 07:50:55] Applying RenameClasses to ContactListPage_Controller.php...
[2020-06-26 07:50:55] Applying ClassToTraitRule to ContactListPage_Controller.php...
[2020-06-26 07:50:55] Applying RenameClasses to Contact.php...
[2020-06-26 07:50:55] Applying ClassToTraitRule to Contact.php...
[2020-06-26 07:50:55] Applying RenameClasses to ContactCategory.php...
[2020-06-26 07:50:55] Applying ClassToTraitRule to ContactCategory.php...
[2020-06-26 07:50:55] Applying RenameClasses to ContactLocation.php...
[2020-06-26 07:50:55] Applying ClassToTraitRule to ContactLocation.php...
[2020-06-26 07:50:55] Applying RenameClasses to _config.php...
[2020-06-26 07:50:55] Applying ClassToTraitRule to _config.php...
modified:	tests/ContactListTest.php
@@ -1,4 +1,6 @@
 <?php
+
+use SilverStripe\Dev\SapphireTest;

 class ContactListTest extends SapphireTest
 {

modified:	src/ContactListPage.php
@@ -3,9 +3,13 @@
 namespace Sunnysideup\ContactList;

 use Page;
-use Contact;
-use GridField;
-use GridFieldConfig_RecordEditor;
+
+
+
+use Sunnysideup\ContactList\Model\Contact;
+use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
+use SilverStripe\Forms\GridField\GridField;
+




modified:	src/Cms/ContactModelAdmin.php
@@ -2,15 +2,20 @@

 namespace Sunnysideup\ContactList\Cms;

-use ModelAdmin;
+
+use Sunnysideup\ContactList\Model\Contact;
+use Sunnysideup\ContactList\Model\ContactLocation;
+use Sunnysideup\ContactList\Model\ContactCategory;
+use SilverStripe\Admin\ModelAdmin;
+


 class ContactModelAdmin extends ModelAdmin
 {
     private static $managed_models = array(
-        'Contact',
-        'ContactLocation',
-        'ContactCategory'
+        Contact::class,
+        ContactLocation::class,
+        ContactCategory::class
     );

     private static $url_segment = 'Contact';

modified:	src/ContactListPage_Controller.php
@@ -3,8 +3,11 @@
 namespace Sunnysideup\ContactList;

 use PageController;
-use TableFilterSortAPI;
-use Contact;
+
+
+use Sunnysideup\TableFilterSort\Api\TableFilterSortAPI;
+use Sunnysideup\ContactList\Model\Contact;
+




modified:	src/Model/Contact.php
@@ -2,8 +2,13 @@

 namespace Sunnysideup\ContactList\Model;

-use DataObject;
-use DropdownField;
+
+
+use Sunnysideup\ContactList\Model\ContactLocation;
+use Sunnysideup\ContactList\Model\ContactCategory;
+use SilverStripe\Forms\DropdownField;
+use SilverStripe\ORM\DataObject;
+


 class Contact extends DataObject
@@ -35,11 +40,11 @@
     );

     private static $has_one = array(
-        'Location' => 'ContactLocation',
+        'Location' => ContactLocation::class,
     );

     private static $many_many = array(
-        'Type'  => 'ContactCategory'
+        'Type'  => ContactCategory::class
     );

     private static $summary_fields = array(

modified:	src/Model/ContactCategory.php
@@ -2,7 +2,10 @@

 namespace Sunnysideup\ContactList\Model;

-use TitleDataObject;
+
+use Sunnysideup\ContactList\Model\Contact;
+use Sunnysideup\TitleDataObject\Model\TitleDataObject;
+


 class ContactCategory extends TitleDataObject
@@ -22,7 +25,7 @@
     private static $table_name = 'ContactCategory';

     private static $belongs_many_many = array(
-        'Contacts' => 'Contact'
+        'Contacts' => Contact::class
     );

     private static $field_labels = array(

modified:	src/Model/ContactLocation.php
@@ -2,7 +2,10 @@

 namespace Sunnysideup\ContactList\Model;

-use TitleDataObject;
+
+use Sunnysideup\ContactList\Model\Contact;
+use Sunnysideup\TitleDataObject\Model\TitleDataObject;
+


 class ContactLocation extends TitleDataObject
@@ -22,7 +25,7 @@
     private static $table_name = 'ContactLocation';

     private static $has_many = array(
-        'Contacts' => 'Contact'
+        'Contacts' => Contact::class
     );

     private static $field_labels = array(

Writing changes for 7 files
✔✔✔