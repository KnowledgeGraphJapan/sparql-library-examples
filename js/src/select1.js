const SparqlClient = require('sparql-client-2');
const SPARQL = SparqlClient.SPARQL;
const endpoint = 'http://ja.dbpedia.org/sparql';
const query = 
  SPARQL`SELECT *
         WHERE {
           ?s ?p ?o .
         }
         LIMIT 10`;
const client = new SparqlClient(endpoint)
  .register({
    dbp: 'http://ja.dbpedia.org/resource/',
    dbo: 'http://dbpedia.org/ontology/'
  });
 
client.query(query)
  .execute()
  .then(function (results) {
    console.dir(results, {depth: null});
  })
  .catch(function (error) {
    console.log("Error: " + error);
  });
