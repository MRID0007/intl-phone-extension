<?php
require 'vendor/autoload.php';

use Michaelridgway\IntlPhoneExtension\PhoneExtensions;

$phoneExtensions = new PhoneExtensions();

// Get dropdown options
$dropdownOptions = $phoneExtensions->getExtensionsForDropdown();

echo "Dropdown options for phone extensions:\n";
foreach ($dropdownOptions as $option) {
    echo "<option value=\"{$option['value']}\">{$option['label']}</option>\n";
}
