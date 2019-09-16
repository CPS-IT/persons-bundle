<?php
/***************************************************************
 *  Copyright notice
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 * A copy is found in the text file GPL.txt and important notices to the license
 * from the author is found in LICENSE.txt distributed with these scripts.
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

$readers = [
    new \Helhum\ConfigLoader\Reader\EnvironmentReader('TYPO3', '_')
];
$absoluteConfigFilePath = getenv('ENV_FILE_PATH');

if (!empty($absoluteConfigFilePath)) {
    $readers = [new \Helhum\ConfigLoader\Reader\YamlFileReader($absoluteConfigFilePath)];
}

$configLoader = new \Helhum\ConfigLoader\ConfigurationLoader($readers);

$config = $configLoader->load();

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
    $GLOBALS['TYPO3_CONF_VARS'],
    $config
);
