<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.translation_update' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationUpdateCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Writer/TranslationWriterInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Writer/TranslationWriter.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/DumperInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/FileDumper.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/PhpFileDumper.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/XliffFileDumper.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/PoFileDumper.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/MoFileDumper.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/YamlFileDumper.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/QtFileDumper.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/CsvFileDumper.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/IniFileDumper.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/JsonFileDumper.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Dumper/IcuResFileDumper.php';

$a = new \Symfony\Component\Translation\Writer\TranslationWriter();
$a->addDumper('php', new \Symfony\Component\Translation\Dumper\PhpFileDumper());
$a->addDumper('xlf', new \Symfony\Component\Translation\Dumper\XliffFileDumper());
$a->addDumper('po', new \Symfony\Component\Translation\Dumper\PoFileDumper());
$a->addDumper('mo', new \Symfony\Component\Translation\Dumper\MoFileDumper());
$a->addDumper('yml', new \Symfony\Component\Translation\Dumper\YamlFileDumper());
$a->addDumper('yaml', new \Symfony\Component\Translation\Dumper\YamlFileDumper('yaml'));
$a->addDumper('ts', new \Symfony\Component\Translation\Dumper\QtFileDumper());
$a->addDumper('csv', new \Symfony\Component\Translation\Dumper\CsvFileDumper());
$a->addDumper('ini', new \Symfony\Component\Translation\Dumper\IniFileDumper());
$a->addDumper('json', new \Symfony\Component\Translation\Dumper\JsonFileDumper());
$a->addDumper('res', new \Symfony\Component\Translation\Dumper\IcuResFileDumper());

$this->privates['console.command.translation_update'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\TranslationUpdateCommand($a, ($this->privates['translation.reader'] ?? $this->load('getTranslation_ReaderService.php')), ($this->privates['translation.extractor'] ?? $this->load('getTranslation_ExtractorService.php')), $this->getEnv('ECCUBE_LOCALE'), (\dirname(__DIR__, 4).'/translations'), (\dirname(__DIR__, 4).'/templates'), [0 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Resources/translations'), 1 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Resources/translations'), 2 => (\dirname(__DIR__, 4).'/vendor/symfony/security/Core/Resources/translations'), 3 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/locale/'), 4 => (\dirname(__DIR__, 4).'/app/Customize/Resource/locale/')], [0 => (\dirname(__DIR__, 4).'/app/template/'.$this->getEnv('string:ECCUBE_TEMPLATE_CODE')), 1 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/default'), 2 => (\dirname(__DIR__, 4).'/app/Plugin'), 3 => (\dirname(__DIR__, 4).'/app/template/admin'), 4 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/admin'), 5 => (\dirname(__DIR__, 4).'/app/template/user_data'), 6 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/toolbar'), 7 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/common'), 8 => (\dirname(__DIR__, 4).'/src/Eccube/Resource/template/install'), 9 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Email'), 10 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Resources/views/Form'), 11 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractController.php'), 12 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/AbstractShoppingController.php'), 13 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/AbstractCsvImportController.php'), 14 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/AdminController.php'), 15 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/BlockController.php'), 16 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/CacheController.php'), 17 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/CssController.php'), 18 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/FileController.php'), 19 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/JsController.php'), 20 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/LayoutController.php'), 21 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/MaintenanceController.php'), 22 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/NewsController.php'), 23 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Content/PageController.php'), 24 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Customer/CustomerController.php'), 25 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Customer/CustomerDeliveryEditController.php'), 26 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Customer/CustomerEditController.php'), 27 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/CsvImportController.php'), 28 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/EditController.php'), 29 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/MailController.php'), 30 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/OrderController.php'), 31 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Order/ShippingController.php'), 32 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/CategoryController.php'), 33 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ClassCategoryController.php'), 34 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ClassNameController.php'), 35 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/CsvImportController.php'), 36 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ProductClassController.php'), 37 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/ProductController.php'), 38 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Product/TagController.php'), 39 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/CsvController.php'), 40 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/DeliveryController.php'), 41 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/MailController.php'), 42 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/OrderStatusController.php'), 43 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/PaymentController.php'), 44 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/ShopController.php'), 45 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/Shop/TaxRuleController.php'), 46 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/AuthorityController.php'), 47 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/LogController.php'), 48 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/LoginHistoryController.php'), 49 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/MasterdataController.php'), 50 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/MemberController.php'), 51 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/SecurityController.php'), 52 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Setting/System/TwoFactorAuthController.php'), 53 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Store/OwnerStoreController.php'), 54 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Store/PluginController.php'), 55 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Admin/Store/TemplateController.php'), 56 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Block/CartController.php'), 57 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Block/SearchProductController.php'), 58 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/CartController.php'), 59 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ContactController.php'), 60 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/EntryController.php'), 61 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ForgotController.php'), 62 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/HelpController.php'), 63 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Install/InstallController.php'), 64 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/InstallPluginController.php'), 65 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/ChangeController.php'), 66 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/DeliveryController.php'), 67 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/MypageController.php'), 68 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/Mypage/WithdrawController.php'), 69 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/NonMemberShoppingController.php'), 70 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ProductController.php'), 71 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ShippingMultipleController.php'), 72 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/ShoppingController.php'), 73 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/SitemapController.php'), 74 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/TopController.php'), 75 => (\dirname(__DIR__, 4).'/src/Eccube/Controller/UserDataController.php'), 76 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/TranslationDebugCommand.php'), 77 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/ChoiceType.php'), 78 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/FileType.php'), 79 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Core/Type/TransformationFailureExtension.php'), 80 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Validator/Type/UploadValidatorExtension.php'), 81 => (\dirname(__DIR__, 4).'/vendor/symfony/form/Extension/Csrf/Type/FormTypeCsrfExtension.php'), 82 => (\dirname(__DIR__, 4).'/vendor/symfony/validator/Util/LegacyTranslatorProxy.php'), 83 => (\dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/CacheWarmer/TranslationsCacheWarmer.php'), 84 => (\dirname(__DIR__, 4).'/vendor/symfony/translation/DataCollector/TranslationDataCollector.php'), 85 => (\dirname(__DIR__, 4).'/vendor/symfony/twig-bridge/Extension/TranslationExtension.php'), 86 => (\dirname(__DIR__, 4).'/vendor/knplabs/knp-paginator-bundle/Helper/Processor.php')]);

$instance->setName('translation:update');

return $instance;
