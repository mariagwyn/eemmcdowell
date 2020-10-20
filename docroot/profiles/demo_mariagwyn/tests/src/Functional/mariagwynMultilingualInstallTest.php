<?php

namespace Drupal\Tests\demo_mariagwyn\Functional;

use Drupal\FunctionalTests\Installer\InstallerTestBase;

/**
 * Tests the multilingual installer installing the MariaGwyn profile.
 *
 * @group Installer
 */
class MariaGwynMultilingualInstallTest extends InstallerTestBase {

  /**
   * {@inheritdoc}
   */
  protected $profile = 'demo_mariagwyn';

  /**
   * {@inheritdoc}
   */
  protected $langcode = 'es';

  /**
   * Ensures that MariaGwyn can be installed with Spanish as the default language.
   */
  public function testMariaGwyn() {
    $this->drupalGet('');
    $this->assertSession()->pageTextContains('Quiche mediterráneo profundo');
  }

  /**
   * {@inheritdoc}
   */
  protected function setUpLanguage() {
    // Place custom local translations in the translations directory to avoid
    // getting translations from localize.drupal.org.
    mkdir(DRUPAL_ROOT . '/' . $this->siteDirectory . '/files/translations', 0777, TRUE);
    file_put_contents(DRUPAL_ROOT . '/' . $this->siteDirectory . '/files/translations/drupal-8.0.0.es.po', $this->getPo('es'));

    parent::setUpLanguage();
  }

  /**
   * Returns the string for the test .po file.
   *
   * @param string $langcode
   *   The language code.
   * @return string
   *   Contents for the test .po file.
   */
  protected function getPo($langcode) {
    return <<<ENDPO
msgid ""
msgstr ""

msgid "Save and continue"
msgstr "Save and continue $langcode"

msgid "Anonymous"
msgstr "Anonymous $langcode"

msgid "Language"
msgstr "Language $langcode"

#: Testing site name configuration during the installer.
msgid "Drupal"
msgstr "Drupal"
ENDPO;
  }

}
