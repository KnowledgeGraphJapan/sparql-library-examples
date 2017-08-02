#!/usr/bin/env ruby
# -*- coding: utf-8 -*-
#
require 'sparql/client'

ENDPOINT = "http://ja.dbpedia.org/sparql"

sparql = SPARQL::Client.new(ENDPOINT)
result = sparql.query("SELECT * WHERE { ?s ?p ?o } LIMIT 10")
# 以下のように書くこともできる
#result = sparql.select.where([:s, :p, :o]).limit(10)

result.each_solution do |solution|
  puts solution.inspect
end
