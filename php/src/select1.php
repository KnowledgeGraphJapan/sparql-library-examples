<?php
    set_include_path(get_include_path() . PATH_SEPARATOR . '../lib/');
    require_once "EasyRdf.php";

    // prefixが必要ならここで定義
    //EasyRdf_Namespace::set('dbpedia', 'http://dbpedia.org/resource/');
    //EasyRdf_Namespace::set('dbo', 'http://dbpedia.org/ontology/');
    //EasyRdf_Namespace::set('dbp', 'http://dbpedia.org/property/');

    $sparql = new EasyRdf_Sparql_Client('http://ja.dbpedia.org/sparql');
    $result = $sparql->query(
        'SELECT * WHERE { ?s ?p ?o . } LIMIT 10'
    );
    foreach ($result as $row) {
        echo $row->s, " ",  $row->p, " ", $row->o, "\n";
    }
?>
