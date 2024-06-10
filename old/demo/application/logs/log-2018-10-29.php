<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2018-10-29 02:35:29 --> 404 Page Not Found: Modular/http:
ERROR - 2018-10-29 02:38:57 --> 404 Page Not Found: Im/index
ERROR - 2018-10-29 02:38:57 --> 404 Page Not Found: Import/index
ERROR - 2018-10-29 02:38:57 --> 404 Page Not Found: Das/index
ERROR - 2018-10-29 02:38:57 --> 404 Page Not Found: Imp/index
ERROR - 2018-10-29 02:38:57 --> 404 Page Not Found: Impor/index
ERROR - 2018-10-29 02:38:57 --> 404 Page Not Found: D/index
ERROR - 2018-10-29 02:38:57 --> 404 Page Not Found: Impo/index
ERROR - 2018-10-29 02:38:58 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/modular/system/core/Loader.php 344
ERROR - 2018-10-29 02:42:00 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/modular/system/core/Loader.php 344
ERROR - 2018-10-29 02:42:00 --> 404 Page Not Found: Impl/index
ERROR - 2018-10-29 02:42:00 --> 404 Page Not Found: Impll/index
ERROR - 2018-10-29 02:42:00 --> 404 Page Not Found: Implll/index
ERROR - 2018-10-29 02:42:06 --> 404 Page Not Found: Lo/index
ERROR - 2018-10-29 02:42:06 --> 404 Page Not Found: Loa/index
ERROR - 2018-10-29 02:42:06 --> 404 Page Not Found: Load/index
ERROR - 2018-10-29 02:42:07 --> 404 Page Not Found: Loadi/index
ERROR - 2018-10-29 02:42:07 --> 404 Page Not Found: Loadin/index
ERROR - 2018-10-29 02:42:07 --> 404 Page Not Found: Loading/index
ERROR - 2018-10-29 02:42:08 --> 404 Page Not Found: Loadingd/index
ERROR - 2018-10-29 02:42:09 --> 404 Page Not Found: Modular/http:
ERROR - 2018-10-29 02:42:16 --> 404 Page Not Found: I/index
ERROR - 2018-10-29 02:42:17 --> 404 Page Not Found: Re/index
ERROR - 2018-10-29 02:42:25 --> 404 Page Not Found: Repo/index
ERROR - 2018-10-29 02:42:26 --> 404 Page Not Found: Rep/index
ERROR - 2018-10-29 02:42:26 --> 404 Page Not Found: Report/index
ERROR - 2018-10-29 02:42:26 --> 404 Page Not Found: Repor/index
ERROR - 2018-10-29 02:42:26 --> 404 Page Not Found: Modular/http:
ERROR - 2018-10-29 02:42:33 --> Query error: Table 'pocketfurniture_modular.modular_packinglists' doesn't exist - Invalid query: SELECT `modular_packings`.`id`, `modular_packings`.`description`, `modular_packings`.`packingOn`, `modular_packings`.`projectName`, `modular_products`.`cabinetName`, `modular_products`.`partName`, `modular_packinglists`.`quantity`, `modular_loadinglists`.`loading_id`
FROM `modular_packings`
INNER JOIN `modular_packinglists` ON `modular_packings`.`id` = `modular_packinglists`.`pkg_id`
LEFT OUTER JOIN `modular_loadinglists` ON `modular_packings`.`id` = `modular_loadinglists`.`pkg_id`
INNER JOIN `modular_products` ON `modular_packinglists`.`pkg_id` = `modular_products`.`id`
WHERE `modular_loadinglists`.`loading_id` IS NULL
ERROR - 2018-10-29 02:42:34 --> Query error: Table 'pocketfurniture_modular.modular_packinglists' doesn't exist - Invalid query: SELECT `modular_packings`.`id`, `modular_packings`.`description`, `modular_packings`.`packingOn`, `modular_packings`.`projectName`, `modular_products`.`cabinetName`, `modular_products`.`partName`, `modular_packinglists`.`quantity`, `modular_loadinglists`.`loading_id`
FROM `modular_packings`
INNER JOIN `modular_packinglists` ON `modular_packings`.`id` = `modular_packinglists`.`pkg_id`
LEFT OUTER JOIN `modular_loadinglists` ON `modular_packings`.`id` = `modular_loadinglists`.`pkg_id`
INNER JOIN `modular_products` ON `modular_packinglists`.`pkg_id` = `modular_products`.`id`
WHERE `modular_loadinglists`.`loading_id` IS NULL
ERROR - 2018-10-29 02:42:37 --> Query error: Table 'pocketfurniture_modular.modular_packinglists' doesn't exist - Invalid query: SELECT `modular_packings`.`id`, `modular_packings`.`description`, `modular_packings`.`packingOn`, `modular_packings`.`projectName`, `modular_products`.`cabinetName`, `modular_products`.`partName`, `modular_packinglists`.`quantity`, `modular_loadinglists`.`loading_id`
FROM `modular_packings`
INNER JOIN `modular_packinglists` ON `modular_packings`.`id` = `modular_packinglists`.`pkg_id`
LEFT OUTER JOIN `modular_loadinglists` ON `modular_packings`.`id` = `modular_loadinglists`.`pkg_id`
INNER JOIN `modular_products` ON `modular_packinglists`.`pkg_id` = `modular_products`.`id`
WHERE `modular_loadinglists`.`loading_id` IS NULL
ERROR - 2018-10-29 02:42:38 --> Query error: Table 'pocketfurniture_modular.modular_packinglists' doesn't exist - Invalid query: SELECT `modular_packings`.`id`, `modular_packings`.`description`, `modular_packings`.`packingOn`, `modular_packings`.`projectName`, `modular_products`.`cabinetName`, `modular_products`.`partName`, `modular_packinglists`.`quantity`, `modular_loadinglists`.`loading_id`
FROM `modular_packings`
INNER JOIN `modular_packinglists` ON `modular_packings`.`id` = `modular_packinglists`.`pkg_id`
LEFT OUTER JOIN `modular_loadinglists` ON `modular_packings`.`id` = `modular_loadinglists`.`pkg_id`
INNER JOIN `modular_products` ON `modular_packinglists`.`pkg_id` = `modular_products`.`id`
WHERE `modular_loadinglists`.`loading_id` IS NULL
ERROR - 2018-10-29 02:42:50 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/modular/system/core/Loader.php 344
ERROR - 2018-10-29 02:42:51 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/modular/system/core/Loader.php 344
ERROR - 2018-10-29 02:43:19 --> Query error: Table 'pocketfurniture_modular.modular_packinglists' doesn't exist - Invalid query: SELECT `modular_packings`.`id`, `modular_packings`.`description`, `modular_packings`.`packingOn`, `modular_packings`.`projectName`, `modular_products`.`cabinetName`, `modular_products`.`partName`, `modular_packinglists`.`quantity`, `modular_loadinglists`.`loading_id`
FROM `modular_packings`
INNER JOIN `modular_packinglists` ON `modular_packings`.`id` = `modular_packinglists`.`pkg_id`
LEFT OUTER JOIN `modular_loadinglists` ON `modular_packings`.`id` = `modular_loadinglists`.`pkg_id`
INNER JOIN `modular_products` ON `modular_packinglists`.`pkg_id` = `modular_products`.`id`
WHERE `modular_loadinglists`.`loading_id` IS NULL
ERROR - 2018-10-29 02:43:19 --> Query error: Table 'pocketfurniture_modular.modular_packinglists' doesn't exist - Invalid query: SELECT `modular_packings`.`id`, `modular_packings`.`description`, `modular_packings`.`packingOn`, `modular_packings`.`projectName`, `modular_products`.`cabinetName`, `modular_products`.`partName`, `modular_packinglists`.`quantity`, `modular_loadinglists`.`loading_id`
FROM `modular_packings`
INNER JOIN `modular_packinglists` ON `modular_packings`.`id` = `modular_packinglists`.`pkg_id`
LEFT OUTER JOIN `modular_loadinglists` ON `modular_packings`.`id` = `modular_loadinglists`.`pkg_id`
INNER JOIN `modular_products` ON `modular_packinglists`.`pkg_id` = `modular_products`.`id`
WHERE `modular_loadinglists`.`loading_id` IS NULL
ERROR - 2018-10-29 02:49:08 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/modular/system/core/Loader.php 344
ERROR - 2018-10-29 02:49:19 --> 404 Page Not Found: Modular/http:
ERROR - 2018-10-29 09:51:05 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/modular/system/core/Loader.php 344
ERROR - 2018-10-29 09:52:15 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/modular/system/core/Loader.php 344
ERROR - 2018-10-29 09:52:19 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/modular/system/core/Loader.php 344
ERROR - 2018-10-29 09:53:02 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/modular/system/core/Loader.php 344
ERROR - 2018-10-29 09:56:06 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/modular/system/core/Loader.php 344
ERROR - 2018-10-29 09:56:16 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/modular/system/core/Loader.php 344
ERROR - 2018-10-29 10:03:41 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/modular/system/core/Loader.php 344
ERROR - 2018-10-29 17:12:37 --> 404 Page Not Found: Modular/access
ERROR - 2018-10-29 17:14:06 --> 404 Page Not Found: Modular/access
ERROR - 2018-10-29 17:14:21 --> 404 Page Not Found: Modular/access
ERROR - 2018-10-29 17:20:43 --> 404 Page Not Found: Modular/access
ERROR - 2018-10-29 17:22:28 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/system/core/Loader.php 344
ERROR - 2018-10-29 17:22:28 --> 404 Page Not Found: Faviconico/index
ERROR - 2018-10-29 17:26:06 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/system/core/Loader.php 344
ERROR - 2018-10-29 17:26:06 --> 404 Page Not Found: Faviconico/index
ERROR - 2018-10-29 17:26:15 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/system/core/Loader.php 344
ERROR - 2018-10-29 17:26:15 --> 404 Page Not Found: Faviconico/index
ERROR - 2018-10-29 17:27:13 --> Severity: error --> Exception: Unable to locate the model you have specified: Imports_Model /home1/pocketfurniture/public_html/system/core/Loader.php 344
ERROR - 2018-10-29 17:27:14 --> 404 Page Not Found: Faviconico/index
ERROR - 2018-10-29 17:29:09 --> Query error: Table 'pocketfurniture_modular.modular_packinglists' doesn't exist - Invalid query: SELECT `modular_packings`.`id`, `modular_packings`.`description`, `modular_packings`.`packingOn`, `modular_packings`.`projectName`, `modular_products`.`cabinetName`, `modular_products`.`partName`, `modular_packinglists`.`quantity`, `modular_loadinglists`.`loading_id`
FROM `modular_packings`
INNER JOIN `modular_packinglists` ON `modular_packings`.`id` = `modular_packinglists`.`pkg_id`
LEFT OUTER JOIN `modular_loadinglists` ON `modular_packings`.`id` = `modular_loadinglists`.`pkg_id`
INNER JOIN `modular_products` ON `modular_packinglists`.`prd_id` = `modular_products`.`id`
ORDER BY `Id` DESC
 LIMIT 10
ERROR - 2018-10-29 17:29:30 --> Query error: Table 'pocketfurniture_modular.modular_packinglists' doesn't exist - Invalid query: SELECT `modular_packings`.`id`, `modular_packings`.`description`, `modular_packings`.`packingOn`, `modular_packings`.`projectName`, `modular_products`.`cabinetName`, `modular_products`.`partName`, `modular_packinglists`.`quantity`, `modular_loadinglists`.`loading_id`
FROM `modular_packings`
INNER JOIN `modular_packinglists` ON `modular_packings`.`id` = `modular_packinglists`.`pkg_id`
LEFT OUTER JOIN `modular_loadinglists` ON `modular_packings`.`id` = `modular_loadinglists`.`pkg_id`
INNER JOIN `modular_products` ON `modular_packinglists`.`prd_id` = `modular_products`.`id`
ORDER BY `Id` DESC
 LIMIT 10
ERROR - 2018-10-29 17:31:38 --> 404 Page Not Found: Barcode/index
ERROR - 2018-10-29 17:33:28 --> 404 Page Not Found: ModBarcode/index
ERROR - 2018-10-29 17:36:08 --> Query error: Table 'pocketfurniture_modular.modular_loadinglists' doesn't exist - Invalid query: SELECT `modular_loadings`.`id`, `modular_loadings`.`customerName`, `modular_loadings`.`loadingOn`, `modular_loadinglists`.`pkg_id`, `modular_packings`.`projectName`, SUM(modular_packinglists.quantity) AS quantity
FROM `modular_loadinglists`
INNER JOIN `modular_loadings` ON `modular_loadings`.`id` = `modular_loadinglists`.`loading_id`
INNER JOIN `modular_packings` ON `modular_packings`.`id` = `modular_loadinglists`.`pkg_id`
INNER JOIN `modular_packinglists` ON `modular_packinglists`.`pkg_id` = `modular_packings`.`id`
GROUP BY `modular_packinglists`.`pkg_id`
ORDER BY `Id` DESC
 LIMIT 10
ERROR - 2018-10-29 17:38:35 --> Query error: Unknown column 'modular_products.cabinetName' in 'field list' - Invalid query: SELECT `modular_packings`.`projectName`, `modular_products`.`cabinetName`, `modular_products`.`partName`, SUM(modular_packinglists.quantity) AS quantity
FROM `modular_packingLists`
INNER JOIN `modular_packings` ON `modular_packings`.`id` = `modular_packingLists`.`pkg_id`
WHERE `modular_packinglists`.`pkg_id` = '1'
ERROR - 2018-10-29 17:41:09 --> Query error: Unknown column 'modular_products.cabinetName' in 'field list' - Invalid query: SELECT `modular_packings`.`projectName`, `modular_products`.`cabinetName`, `modular_products`.`partName`, SUM(modular_packinglists.quantity) AS quantity
FROM `modular_packingLists`
INNER JOIN `modular_packings` ON `modular_packings`.`id` = `modular_packingLists`.`pkg_id`
WHERE `modular_packinglists`.`pkg_id` = '1'
ERROR - 2018-10-29 17:55:56 --> Query error: Unknown column 'modular_packinglists.quantity' in 'field list' - Invalid query: SELECT `modular_packings`.`projectName`, SUM(modular_packinglists.quantity) AS quantity
FROM `modular_packingLists`
INNER JOIN `modular_packings` ON `modular_packings`.`id` = `modular_packingLists`.`pkg_id`
WHERE `modular_packinglists`.`pkg_id` = '1'
ERROR - 2018-10-29 17:56:37 --> Query error: Unknown column 'modular_packinglists.quantity' in 'field list' - Invalid query: SELECT `modular_packings`.`projectName`, SUM(modular_packinglists.quantity) AS quantity
FROM `modular_packingLists`
INNER JOIN `modular_packings` ON `modular_packings`.`id` = `modular_packingLists`.`pkg_id`
WHERE `modular_packinglists`.`pkg_id` = '1'
ERROR - 2018-10-29 18:04:35 --> 404 Page Not Found: ModBarcode/index
ERROR - 2018-10-29 18:21:35 --> 404 Page Not Found: Barcode/index
ERROR - 2018-10-29 18:25:44 --> 404 Page Not Found: Bcode/index
ERROR - 2018-10-29 18:30:56 --> 404 Page Not Found: Bcode/index
