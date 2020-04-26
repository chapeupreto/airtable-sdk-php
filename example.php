<?php
// example usage file
require_once('vendor/autoload.php');

use Beachcasts\Airtable\Table;
use Beachcasts\Airtable\AirtableClient;

Dotenv\Dotenv::create(__DIR__)->load();

$baseId = '<base_id>';
$tableName = '<table_name>';
$viewName = '<view_name>';

$table = new Table($tableName, $viewName);

$airtableClient = new AirtableClient($baseId, $table);
$client = $airtableClient->getClient();

$table->setClient($client);

$params = [];
$content = $table->list($params);

//$data = '{
//  "records": [
//    {
//      "fields": {
//        "Headline": "Poolside views",
//        "Section": "Our picks",
//        "Author": {
//          "id": "usru7j5m2lcNhriKv",
//          "email": "katherineduh+collab7@demo.htable.com",
//          "name": "Cameron Toth"
//        },
//        "Publish date": "2020-08-07",
//        "Status": "Planned",
//        "Header image": [
//          {
//            "url": "https://dl.airtable.com/pQXlwEtaSu8uo9dYZKvQ_pexels-photo-261102.jpeg%3Fh%3D350%26auto%3Dcompress%26cs%3Dtinysrgb"
//          }
//        ],
//        "Draft due": "2020-07-27",
//        "Freelancer timesheets": [
//          "recXRf9mydNR4KfRw"
//        ]
//      }
//    }
//  ]
// }';

//$content = $table->create($data);

//$id = 'recMjDSuJcK8fQazp';
//$content = $table->read($id);


//$data = '{
//  "records": [
//    {
//      "id": "recygQ7taueFlFHo6",
//      "fields": {
//        "Headline": "Poolside views - Adam",
//        "Section": "Our picks",
//        "Author": {
//          "id": "usru7j5m2lcNhriKv",
//          "email": "katherineduh+collab7@demo.htable.com",
//          "name": "Beachcasts Cameron Toth"
//        },
//        "Publish date": "2020-08-07",
//        "Status": "Planned",
//        "Header image": [
//          {
//            "id": "attF9PKAE5dD9iYZ5"
//          }
//        ],
//        "Draft due": "2020-07-27",
//        "Freelancer timesheets": [
//          "recXRf9mydNR4KfRw"
//        ]
//      }
//    }
//  ]
// }';

//$content = $table->update($data, 'patch');

//$id = 'recygQ7taueFlFHo6';
//$content = $table->delete($id);


echo $content->getBody()->getContents();
