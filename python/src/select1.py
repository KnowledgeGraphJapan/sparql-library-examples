from SPARQLWrapper import SPARQLWrapper, JSON

sparql = SPARQLWrapper("http://ja.dbpedia.org/sparql")
sparql.setQuery("SELECT * WHERE { ?s ?p ?o . } LIMIT 10")
sparql.setReturnFormat(JSON)
results = sparql.query().convert()

for result in results["results"]["bindings"]:
    print result

