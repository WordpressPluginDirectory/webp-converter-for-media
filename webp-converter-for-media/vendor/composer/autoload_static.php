<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit977a71a7bb63d9fc0c8d6b8913a12a29
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WebpConverter\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WebpConverter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Exception\\DuplicatedFormOptionKeyException' => __DIR__ . '/../..' . '/vendor_prefixed/src/Exception/DuplicatedFormOptionKeyException.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Exception\\DuplicatedFormValueKeyException' => __DIR__ . '/../..' . '/vendor_prefixed/src/Exception/DuplicatedFormValueKeyException.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Exception\\UnknownFormOptionKeyException' => __DIR__ . '/../..' . '/vendor_prefixed/src/Exception/UnknownFormOptionKeyException.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Hookable' => __DIR__ . '/../..' . '/vendor_prefixed/src/Hookable.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Modal' => __DIR__ . '/../..' . '/vendor_prefixed/src/Modal.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormOption' => __DIR__ . '/../..' . '/vendor_prefixed/src/Model/FormOption.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormOptions' => __DIR__ . '/../..' . '/vendor_prefixed/src/Model/FormOptions.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormTemplate' => __DIR__ . '/../..' . '/vendor_prefixed/src/Model/FormTemplate.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormValue' => __DIR__ . '/../..' . '/vendor_prefixed/src/Model/FormValue.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\FormValues' => __DIR__ . '/../..' . '/vendor_prefixed/src/Model/FormValues.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Model\\RequestData' => __DIR__ . '/../..' . '/vendor_prefixed/src/Model/RequestData.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Service\\AssetsPrinterService' => __DIR__ . '/../..' . '/vendor_prefixed/src/Service/AssetsPrinterService.php',
        'WebpConverterVendor\\MattPlugins\\DeactivationModal\\Service\\TemplateGeneratorService' => __DIR__ . '/../..' . '/vendor_prefixed/src/Service/TemplateGeneratorService.php',
        'WebpConverter\\Action\\ConvertAttachmentAction' => __DIR__ . '/../..' . '/src/Action/ConvertAttachmentAction.php',
        'WebpConverter\\Action\\ConvertPathsAction' => __DIR__ . '/../..' . '/src/Action/ConvertPathsAction.php',
        'WebpConverter\\Action\\DeleteFileHandler' => __DIR__ . '/../..' . '/src/Action/DeleteFileHandler.php',
        'WebpConverter\\Action\\DeletePathsAction' => __DIR__ . '/../..' . '/src/Action/DeletePathsAction.php',
        'WebpConverter\\Action\\UploadFileHandler' => __DIR__ . '/../..' . '/src/Action/UploadFileHandler.php',
        'WebpConverter\\Conversion\\AttachmentPathsGenerator' => __DIR__ . '/../..' . '/src/Conversion/AttachmentPathsGenerator.php',
        'WebpConverter\\Conversion\\CrashedFilesOperator' => __DIR__ . '/../..' . '/src/Conversion/CrashedFilesOperator.php',
        'WebpConverter\\Conversion\\Cron\\CronEventGenerator' => __DIR__ . '/../..' . '/src/Conversion/Cron/CronEventGenerator.php',
        'WebpConverter\\Conversion\\Cron\\CronInitiator' => __DIR__ . '/../..' . '/src/Conversion/Cron/CronInitiator.php',
        'WebpConverter\\Conversion\\Cron\\CronSchedulesGenerator' => __DIR__ . '/../..' . '/src/Conversion/Cron/CronSchedulesGenerator.php',
        'WebpConverter\\Conversion\\Cron\\CronStatusManager' => __DIR__ . '/../..' . '/src/Conversion/Cron/CronStatusManager.php',
        'WebpConverter\\Conversion\\Cron\\CronStatusViewer' => __DIR__ . '/../..' . '/src/Conversion/Cron/CronStatusViewer.php',
        'WebpConverter\\Conversion\\DirectoryFilesFinder' => __DIR__ . '/../..' . '/src/Conversion/DirectoryFilesFinder.php',
        'WebpConverter\\Conversion\\Directory\\DirectoryAbstract' => __DIR__ . '/../..' . '/src/Conversion/Directory/DirectoryAbstract.php',
        'WebpConverter\\Conversion\\Directory\\DirectoryFactory' => __DIR__ . '/../..' . '/src/Conversion/Directory/DirectoryFactory.php',
        'WebpConverter\\Conversion\\Directory\\DirectoryIntegrator' => __DIR__ . '/../..' . '/src/Conversion/Directory/DirectoryIntegrator.php',
        'WebpConverter\\Conversion\\Directory\\DirectoryInterface' => __DIR__ . '/../..' . '/src/Conversion/Directory/DirectoryInterface.php',
        'WebpConverter\\Conversion\\Directory\\SourceDirectory' => __DIR__ . '/../..' . '/src/Conversion/Directory/SourceDirectory.php',
        'WebpConverter\\Conversion\\Directory\\UploadsDirectory' => __DIR__ . '/../..' . '/src/Conversion/Directory/UploadsDirectory.php',
        'WebpConverter\\Conversion\\Directory\\UploadsWebpcDirectory' => __DIR__ . '/../..' . '/src/Conversion/Directory/UploadsWebpcDirectory.php',
        'WebpConverter\\Conversion\\Endpoint\\CronConversionEndpoint' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/CronConversionEndpoint.php',
        'WebpConverter\\Conversion\\Endpoint\\EndpointAbstract' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/EndpointAbstract.php',
        'WebpConverter\\Conversion\\Endpoint\\EndpointIntegrator' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/EndpointIntegrator.php',
        'WebpConverter\\Conversion\\Endpoint\\EndpointInterface' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/EndpointInterface.php',
        'WebpConverter\\Conversion\\Endpoint\\FilesStatsEndpoint' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/FilesStatsEndpoint.php',
        'WebpConverter\\Conversion\\Endpoint\\PathsEndpoint' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/PathsEndpoint.php',
        'WebpConverter\\Conversion\\Endpoint\\RegenerateAttachmentEndpoint' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/RegenerateAttachmentEndpoint.php',
        'WebpConverter\\Conversion\\Endpoint\\RegenerateEndpoint' => __DIR__ . '/../..' . '/src/Conversion/Endpoint/RegenerateEndpoint.php',
        'WebpConverter\\Conversion\\ExcludedPathsOperator' => __DIR__ . '/../..' . '/src/Conversion/ExcludedPathsOperator.php',
        'WebpConverter\\Conversion\\FilesTreeFinder' => __DIR__ . '/../..' . '/src/Conversion/FilesTreeFinder.php',
        'WebpConverter\\Conversion\\Format\\AvifFormat' => __DIR__ . '/../..' . '/src/Conversion/Format/AvifFormat.php',
        'WebpConverter\\Conversion\\Format\\FormatAbstract' => __DIR__ . '/../..' . '/src/Conversion/Format/FormatAbstract.php',
        'WebpConverter\\Conversion\\Format\\FormatFactory' => __DIR__ . '/../..' . '/src/Conversion/Format/FormatFactory.php',
        'WebpConverter\\Conversion\\Format\\FormatInterface' => __DIR__ . '/../..' . '/src/Conversion/Format/FormatInterface.php',
        'WebpConverter\\Conversion\\Format\\WebpFormat' => __DIR__ . '/../..' . '/src/Conversion/Format/WebpFormat.php',
        'WebpConverter\\Conversion\\LargerFilesOperator' => __DIR__ . '/../..' . '/src/Conversion/LargerFilesOperator.php',
        'WebpConverter\\Conversion\\Method\\GdMethod' => __DIR__ . '/../..' . '/src/Conversion/Method/GdMethod.php',
        'WebpConverter\\Conversion\\Method\\ImagickMethod' => __DIR__ . '/../..' . '/src/Conversion/Method/ImagickMethod.php',
        'WebpConverter\\Conversion\\Method\\LibraryMethodAbstract' => __DIR__ . '/../..' . '/src/Conversion/Method/LibraryMethodAbstract.php',
        'WebpConverter\\Conversion\\Method\\LibraryMethodInterface' => __DIR__ . '/../..' . '/src/Conversion/Method/LibraryMethodInterface.php',
        'WebpConverter\\Conversion\\Method\\MethodAbstract' => __DIR__ . '/../..' . '/src/Conversion/Method/MethodAbstract.php',
        'WebpConverter\\Conversion\\Method\\MethodFactory' => __DIR__ . '/../..' . '/src/Conversion/Method/MethodFactory.php',
        'WebpConverter\\Conversion\\Method\\MethodIntegrator' => __DIR__ . '/../..' . '/src/Conversion/Method/MethodIntegrator.php',
        'WebpConverter\\Conversion\\Method\\MethodInterface' => __DIR__ . '/../..' . '/src/Conversion/Method/MethodInterface.php',
        'WebpConverter\\Conversion\\Method\\RemoteMethod' => __DIR__ . '/../..' . '/src/Conversion/Method/RemoteMethod.php',
        'WebpConverter\\Conversion\\OutputPathGenerator' => __DIR__ . '/../..' . '/src/Conversion/OutputPathGenerator.php',
        'WebpConverter\\Conversion\\PathsFinder' => __DIR__ . '/../..' . '/src/Conversion/PathsFinder.php',
        'WebpConverter\\Error\\Detector\\CloudflareStatusDetector' => __DIR__ . '/../..' . '/src/Error/Detector/CloudflareStatusDetector.php',
        'WebpConverter\\Error\\Detector\\CurlLibraryDetector' => __DIR__ . '/../..' . '/src/Error/Detector/CurlLibraryDetector.php',
        'WebpConverter\\Error\\Detector\\DetectorInterface' => __DIR__ . '/../..' . '/src/Error/Detector/DetectorInterface.php',
        'WebpConverter\\Error\\Detector\\LibsNotInstalledDetector' => __DIR__ . '/../..' . '/src/Error/Detector/LibsNotInstalledDetector.php',
        'WebpConverter\\Error\\Detector\\LibsWithoutWebpSupportDetector' => __DIR__ . '/../..' . '/src/Error/Detector/LibsWithoutWebpSupportDetector.php',
        'WebpConverter\\Error\\Detector\\PassthruExecutionDetector' => __DIR__ . '/../..' . '/src/Error/Detector/PassthruExecutionDetector.php',
        'WebpConverter\\Error\\Detector\\PathsErrorsDetector' => __DIR__ . '/../..' . '/src/Error/Detector/PathsErrorsDetector.php',
        'WebpConverter\\Error\\Detector\\RewritesErrorsDetector' => __DIR__ . '/../..' . '/src/Error/Detector/RewritesErrorsDetector.php',
        'WebpConverter\\Error\\Detector\\SettingsIncorrectDetector' => __DIR__ . '/../..' . '/src/Error/Detector/SettingsIncorrectDetector.php',
        'WebpConverter\\Error\\Detector\\TokenStatusDetector' => __DIR__ . '/../..' . '/src/Error/Detector/TokenStatusDetector.php',
        'WebpConverter\\Error\\Detector\\UnsupportedServerDetector' => __DIR__ . '/../..' . '/src/Error/Detector/UnsupportedServerDetector.php',
        'WebpConverter\\Error\\ErrorDetectorAggregator' => __DIR__ . '/../..' . '/src/Error/ErrorDetectorAggregator.php',
        'WebpConverter\\Error\\Notice\\AccessTokenInvalidNotice' => __DIR__ . '/../..' . '/src/Error/Notice/AccessTokenInvalidNotice.php',
        'WebpConverter\\Error\\Notice\\ApiLimitExceededNotice' => __DIR__ . '/../..' . '/src/Error/Notice/ApiLimitExceededNotice.php',
        'WebpConverter\\Error\\Notice\\BypassingApacheNotice' => __DIR__ . '/../..' . '/src/Error/Notice/BypassingApacheNotice.php',
        'WebpConverter\\Error\\Notice\\CloudflareSettingsIncorrectNotice' => __DIR__ . '/../..' . '/src/Error/Notice/CloudflareSettingsIncorrectNotice.php',
        'WebpConverter\\Error\\Notice\\CurlFunctionDisabledNotice' => __DIR__ . '/../..' . '/src/Error/Notice/CurlFunctionDisabledNotice.php',
        'WebpConverter\\Error\\Notice\\LibsNotInstalledNotice' => __DIR__ . '/../..' . '/src/Error/Notice/LibsNotInstalledNotice.php',
        'WebpConverter\\Error\\Notice\\LibsWithoutWebpSupportNotice' => __DIR__ . '/../..' . '/src/Error/Notice/LibsWithoutWebpSupportNotice.php',
        'WebpConverter\\Error\\Notice\\NoticeInterface' => __DIR__ . '/../..' . '/src/Error/Notice/NoticeInterface.php',
        'WebpConverter\\Error\\Notice\\PassthruExecutionNotice' => __DIR__ . '/../..' . '/src/Error/Notice/PassthruExecutionNotice.php',
        'WebpConverter\\Error\\Notice\\PassthruNotWorkingNotice' => __DIR__ . '/../..' . '/src/Error/Notice/PassthruNotWorkingNotice.php',
        'WebpConverter\\Error\\Notice\\PathHtaccessNotWritableNotice' => __DIR__ . '/../..' . '/src/Error/Notice/PathHtaccessNotWritableNotice.php',
        'WebpConverter\\Error\\Notice\\PathUploadsUnavailableNotice' => __DIR__ . '/../..' . '/src/Error/Notice/PathUploadsUnavailableNotice.php',
        'WebpConverter\\Error\\Notice\\PathWebpDuplicatedNotice' => __DIR__ . '/../..' . '/src/Error/Notice/PathWebpDuplicatedNotice.php',
        'WebpConverter\\Error\\Notice\\PathWebpNotWritableNotice' => __DIR__ . '/../..' . '/src/Error/Notice/PathWebpNotWritableNotice.php',
        'WebpConverter\\Error\\Notice\\RewritesCachedNotice' => __DIR__ . '/../..' . '/src/Error/Notice/RewritesCachedNotice.php',
        'WebpConverter\\Error\\Notice\\RewritesNotExecutedNotice' => __DIR__ . '/../..' . '/src/Error/Notice/RewritesNotExecutedNotice.php',
        'WebpConverter\\Error\\Notice\\RewritesNotWorkingNotice' => __DIR__ . '/../..' . '/src/Error/Notice/RewritesNotWorkingNotice.php',
        'WebpConverter\\Error\\Notice\\RewritesUploadsBlockedNotice' => __DIR__ . '/../..' . '/src/Error/Notice/RewritesUploadsBlockedNotice.php',
        'WebpConverter\\Error\\Notice\\SettingsIncorrectNotice' => __DIR__ . '/../..' . '/src/Error/Notice/SettingsIncorrectNotice.php',
        'WebpConverter\\Error\\Notice\\UnsupportedPlaygroundServerNotice' => __DIR__ . '/../..' . '/src/Error/Notice/UnsupportedPlaygroundServerNotice.php',
        'WebpConverter\\Exception\\ConversionErrorException' => __DIR__ . '/../..' . '/src/Exception/ConversionErrorException.php',
        'WebpConverter\\Exception\\ExceptionAbstract' => __DIR__ . '/../..' . '/src/Exception/ExceptionAbstract.php',
        'WebpConverter\\Exception\\ExceptionInterface' => __DIR__ . '/../..' . '/src/Exception/ExceptionInterface.php',
        'WebpConverter\\Exception\\ExtensionUnsupportedException' => __DIR__ . '/../..' . '/src/Exception/ExtensionUnsupportedException.php',
        'WebpConverter\\Exception\\FilesizeOversizeException' => __DIR__ . '/../..' . '/src/Exception/FilesizeOversizeException.php',
        'WebpConverter\\Exception\\FunctionUnavailableException' => __DIR__ . '/../..' . '/src/Exception/FunctionUnavailableException.php',
        'WebpConverter\\Exception\\ImageAnimatedException' => __DIR__ . '/../..' . '/src/Exception/ImageAnimatedException.php',
        'WebpConverter\\Exception\\ImageInvalidException' => __DIR__ . '/../..' . '/src/Exception/ImageInvalidException.php',
        'WebpConverter\\Exception\\ImagickNotSupportWebpException' => __DIR__ . '/../..' . '/src/Exception/ImagickNotSupportWebpException.php',
        'WebpConverter\\Exception\\ImagickUnavailableException' => __DIR__ . '/../..' . '/src/Exception/ImagickUnavailableException.php',
        'WebpConverter\\Exception\\LargerThanOriginalException' => __DIR__ . '/../..' . '/src/Exception/LargerThanOriginalException.php',
        'WebpConverter\\Exception\\OutputPathException' => __DIR__ . '/../..' . '/src/Exception/OutputPathException.php',
        'WebpConverter\\Exception\\RemoteErrorResponseException' => __DIR__ . '/../..' . '/src/Exception/RemoteErrorResponseException.php',
        'WebpConverter\\Exception\\RemoteRequestException' => __DIR__ . '/../..' . '/src/Exception/RemoteRequestException.php',
        'WebpConverter\\Exception\\ResolutionOversizeException' => __DIR__ . '/../..' . '/src/Exception/ResolutionOversizeException.php',
        'WebpConverter\\Exception\\ServerConfigurationException' => __DIR__ . '/../..' . '/src/Exception/ServerConfigurationException.php',
        'WebpConverter\\Exception\\SourcePathException' => __DIR__ . '/../..' . '/src/Exception/SourcePathException.php',
        'WebpConverter\\HookableInterface' => __DIR__ . '/../..' . '/src/HookableInterface.php',
        'WebpConverter\\Loader\\HtaccessBypassingLoader' => __DIR__ . '/../..' . '/src/Loader/HtaccessBypassingLoader.php',
        'WebpConverter\\Loader\\HtaccessLoader' => __DIR__ . '/../..' . '/src/Loader/HtaccessLoader.php',
        'WebpConverter\\Loader\\LoaderAbstract' => __DIR__ . '/../..' . '/src/Loader/LoaderAbstract.php',
        'WebpConverter\\Loader\\LoaderIntegrator' => __DIR__ . '/../..' . '/src/Loader/LoaderIntegrator.php',
        'WebpConverter\\Loader\\LoaderInterface' => __DIR__ . '/../..' . '/src/Loader/LoaderInterface.php',
        'WebpConverter\\Loader\\PassthruLoader' => __DIR__ . '/../..' . '/src/Loader/PassthruLoader.php',
        'WebpConverter\\Model\\Token' => __DIR__ . '/../..' . '/src/Model/Token.php',
        'WebpConverter\\Notice\\BlackFridayNotice' => __DIR__ . '/../..' . '/src/Notice/BlackFridayNotice.php',
        'WebpConverter\\Notice\\CloudflareNotice' => __DIR__ . '/../..' . '/src/Notice/CloudflareNotice.php',
        'WebpConverter\\Notice\\NoticeAbstract' => __DIR__ . '/../..' . '/src/Notice/NoticeAbstract.php',
        'WebpConverter\\Notice\\NoticeIntegrator' => __DIR__ . '/../..' . '/src/Notice/NoticeIntegrator.php',
        'WebpConverter\\Notice\\NoticeInterface' => __DIR__ . '/../..' . '/src/Notice/NoticeInterface.php',
        'WebpConverter\\Notice\\ThanksNotice' => __DIR__ . '/../..' . '/src/Notice/ThanksNotice.php',
        'WebpConverter\\Notice\\TokenInactiveNotice' => __DIR__ . '/../..' . '/src/Notice/TokenInactiveNotice.php',
        'WebpConverter\\Notice\\UpgradeNotice' => __DIR__ . '/../..' . '/src/Notice/UpgradeNotice.php',
        'WebpConverter\\Notice\\WelcomeNotice' => __DIR__ . '/../..' . '/src/Notice/WelcomeNotice.php',
        'WebpConverter\\PluginData' => __DIR__ . '/../..' . '/src/PluginData.php',
        'WebpConverter\\PluginInfo' => __DIR__ . '/../..' . '/src/PluginInfo.php',
        'WebpConverter\\Plugin\\ActivationHandler' => __DIR__ . '/../..' . '/src/Plugin/ActivationHandler.php',
        'WebpConverter\\Plugin\\Activation\\OutputDirectoryGenerator' => __DIR__ . '/../..' . '/src/Plugin/Activation/OutputDirectoryGenerator.php',
        'WebpConverter\\Plugin\\Activation\\PluginSettingsManager' => __DIR__ . '/../..' . '/src/Plugin/Activation/PluginSettingsManager.php',
        'WebpConverter\\Plugin\\DeactivationHandler' => __DIR__ . '/../..' . '/src/Plugin/DeactivationHandler.php',
        'WebpConverter\\Plugin\\Deactivation\\CronManager' => __DIR__ . '/../..' . '/src/Plugin/Deactivation/CronManager.php',
        'WebpConverter\\Plugin\\Deactivation\\PluginSettingsManager' => __DIR__ . '/../..' . '/src/Plugin/Deactivation/PluginSettingsManager.php',
        'WebpConverter\\Plugin\\PluginLinksGenerator' => __DIR__ . '/../..' . '/src/Plugin/PluginLinksGenerator.php',
        'WebpConverter\\Plugin\\UninstallHandler' => __DIR__ . '/../..' . '/src/Plugin/UninstallHandler.php',
        'WebpConverter\\Plugin\\Uninstall\\DebugFilesRemover' => __DIR__ . '/../..' . '/src/Plugin/Uninstall/DebugFilesRemover.php',
        'WebpConverter\\Plugin\\Uninstall\\OutputFilesRemover' => __DIR__ . '/../..' . '/src/Plugin/Uninstall/OutputFilesRemover.php',
        'WebpConverter\\Plugin\\Uninstall\\PluginSettingsManager' => __DIR__ . '/../..' . '/src/Plugin/Uninstall/PluginSettingsManager.php',
        'WebpConverter\\Repository\\TokenRepository' => __DIR__ . '/../..' . '/src/Repository/TokenRepository.php',
        'WebpConverter\\Service\\BackupExcluder' => __DIR__ . '/../..' . '/src/Service/BackupExcluder.php',
        'WebpConverter\\Service\\CacheIntegrator' => __DIR__ . '/../..' . '/src/Service/CacheIntegrator.php',
        'WebpConverter\\Service\\CloudflareConfigurator' => __DIR__ . '/../..' . '/src/Service/CloudflareConfigurator.php',
        'WebpConverter\\Service\\DeactivationModalLoader' => __DIR__ . '/../..' . '/src/Service/DeactivationModalLoader.php',
        'WebpConverter\\Service\\EnvDetector' => __DIR__ . '/../..' . '/src/Service/EnvDetector.php',
        'WebpConverter\\Service\\FileLoader' => __DIR__ . '/../..' . '/src/Service/FileLoader.php',
        'WebpConverter\\Service\\MediaStatusViewer' => __DIR__ . '/../..' . '/src/Service/MediaStatusViewer.php',
        'WebpConverter\\Service\\OptionsAccessManager' => __DIR__ . '/../..' . '/src/Service/OptionsAccessManager.php',
        'WebpConverter\\Service\\PathsGenerator' => __DIR__ . '/../..' . '/src/Service/PathsGenerator.php',
        'WebpConverter\\Service\\RestApiUnlocker' => __DIR__ . '/../..' . '/src/Service/RestApiUnlocker.php',
        'WebpConverter\\Service\\ServerConfigurator' => __DIR__ . '/../..' . '/src/Service/ServerConfigurator.php',
        'WebpConverter\\Service\\SiteHealthDetector' => __DIR__ . '/../..' . '/src/Service/SiteHealthDetector.php',
        'WebpConverter\\Service\\StatsManager' => __DIR__ . '/../..' . '/src/Service/StatsManager.php',
        'WebpConverter\\Service\\TokenValidator' => __DIR__ . '/../..' . '/src/Service/TokenValidator.php',
        'WebpConverter\\Service\\ViewLoader' => __DIR__ . '/../..' . '/src/Service/ViewLoader.php',
        'WebpConverter\\Service\\WpCliManager' => __DIR__ . '/../..' . '/src/Service/WpCliManager.php',
        'WebpConverter\\Settings\\AdminAssetsLoader' => __DIR__ . '/../..' . '/src/Settings/AdminAssetsLoader.php',
        'WebpConverter\\Settings\\Option\\AccessTokenOption' => __DIR__ . '/../..' . '/src/Settings/Option/AccessTokenOption.php',
        'WebpConverter\\Settings\\Option\\AutoConversionOption' => __DIR__ . '/../..' . '/src/Settings/Option/AutoConversionOption.php',
        'WebpConverter\\Settings\\Option\\CloudflareApiTokenOption' => __DIR__ . '/../..' . '/src/Settings/Option/CloudflareApiTokenOption.php',
        'WebpConverter\\Settings\\Option\\CloudflareZoneIdOption' => __DIR__ . '/../..' . '/src/Settings/Option/CloudflareZoneIdOption.php',
        'WebpConverter\\Settings\\Option\\ConversionMethodOption' => __DIR__ . '/../..' . '/src/Settings/Option/ConversionMethodOption.php',
        'WebpConverter\\Settings\\Option\\ExcludedDirectoriesOption' => __DIR__ . '/../..' . '/src/Settings/Option/ExcludedDirectoriesOption.php',
        'WebpConverter\\Settings\\Option\\ExtraFeaturesOption' => __DIR__ . '/../..' . '/src/Settings/Option/ExtraFeaturesOption.php',
        'WebpConverter\\Settings\\Option\\HtaccessRewriteOutputOption' => __DIR__ . '/../..' . '/src/Settings/Option/HtaccessRewriteOutputOption.php',
        'WebpConverter\\Settings\\Option\\HtaccessRewritePathOption' => __DIR__ . '/../..' . '/src/Settings/Option/HtaccessRewritePathOption.php',
        'WebpConverter\\Settings\\Option\\HtaccessRewriteRootOption' => __DIR__ . '/../..' . '/src/Settings/Option/HtaccessRewriteRootOption.php',
        'WebpConverter\\Settings\\Option\\ImageResizeOption' => __DIR__ . '/../..' . '/src/Settings/Option/ImageResizeOption.php',
        'WebpConverter\\Settings\\Option\\ImagesQualityOption' => __DIR__ . '/../..' . '/src/Settings/Option/ImagesQualityOption.php',
        'WebpConverter\\Settings\\Option\\LoaderTypeOption' => __DIR__ . '/../..' . '/src/Settings/Option/LoaderTypeOption.php',
        'WebpConverter\\Settings\\Option\\MediaStatsOption' => __DIR__ . '/../..' . '/src/Settings/Option/MediaStatsOption.php',
        'WebpConverter\\Settings\\Option\\OptionAbstract' => __DIR__ . '/../..' . '/src/Settings/Option/OptionAbstract.php',
        'WebpConverter\\Settings\\Option\\OptionIntegrator' => __DIR__ . '/../..' . '/src/Settings/Option/OptionIntegrator.php',
        'WebpConverter\\Settings\\Option\\OptionInterface' => __DIR__ . '/../..' . '/src/Settings/Option/OptionInterface.php',
        'WebpConverter\\Settings\\Option\\OptionsAggregator' => __DIR__ . '/../..' . '/src/Settings/Option/OptionsAggregator.php',
        'WebpConverter\\Settings\\Option\\OutputFormatsOption' => __DIR__ . '/../..' . '/src/Settings/Option/OutputFormatsOption.php',
        'WebpConverter\\Settings\\Option\\RewriteInheritanceOption' => __DIR__ . '/../..' . '/src/Settings/Option/RewriteInheritanceOption.php',
        'WebpConverter\\Settings\\Option\\ServiceModeOption' => __DIR__ . '/../..' . '/src/Settings/Option/ServiceModeOption.php',
        'WebpConverter\\Settings\\Option\\SupportedDirectoriesOption' => __DIR__ . '/../..' . '/src/Settings/Option/SupportedDirectoriesOption.php',
        'WebpConverter\\Settings\\Option\\SupportedExtensionsOption' => __DIR__ . '/../..' . '/src/Settings/Option/SupportedExtensionsOption.php',
        'WebpConverter\\Settings\\OptionsManager' => __DIR__ . '/../..' . '/src/Settings/OptionsManager.php',
        'WebpConverter\\Settings\\Page\\AdvancedSettingsPage' => __DIR__ . '/../..' . '/src/Settings/Page/AdvancedSettingsPage.php',
        'WebpConverter\\Settings\\Page\\BulkOptimizationPage' => __DIR__ . '/../..' . '/src/Settings/Page/BulkOptimizationPage.php',
        'WebpConverter\\Settings\\Page\\CdnSettingsPage' => __DIR__ . '/../..' . '/src/Settings/Page/CdnSettingsPage.php',
        'WebpConverter\\Settings\\Page\\DebugPage' => __DIR__ . '/../..' . '/src/Settings/Page/DebugPage.php',
        'WebpConverter\\Settings\\Page\\ExpertSettingsPage' => __DIR__ . '/../..' . '/src/Settings/Page/ExpertSettingsPage.php',
        'WebpConverter\\Settings\\Page\\GeneralSettingsPage' => __DIR__ . '/../..' . '/src/Settings/Page/GeneralSettingsPage.php',
        'WebpConverter\\Settings\\Page\\PageAbstract' => __DIR__ . '/../..' . '/src/Settings/Page/PageAbstract.php',
        'WebpConverter\\Settings\\Page\\PageIntegrator' => __DIR__ . '/../..' . '/src/Settings/Page/PageIntegrator.php',
        'WebpConverter\\Settings\\Page\\PageInterface' => __DIR__ . '/../..' . '/src/Settings/Page/PageInterface.php',
        'WebpConverter\\Settings\\SettingsManager' => __DIR__ . '/../..' . '/src/Settings/SettingsManager.php',
        'WebpConverter\\WebpConverter' => __DIR__ . '/../..' . '/src/WebpConverter.php',
        'WebpConverter\\WebpConverterConstants' => __DIR__ . '/../..' . '/src/WebpConverterConstants.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit977a71a7bb63d9fc0c8d6b8913a12a29::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit977a71a7bb63d9fc0c8d6b8913a12a29::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit977a71a7bb63d9fc0c8d6b8913a12a29::$classMap;

        }, null, ClassLoader::class);
    }
}
