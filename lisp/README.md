# Common Lisp

実行環境はsbclを想定。他でも動くはず。

## 下準備: quicklisp

```
$ wget http://beta.quicklisp.org/quicklisp.lisp
$ sbcl
```

```
* (load "quicklisp.lisp")
* (quicklisp-quickstart:install)
* (load "setup.lisp")
* (ql:add-to-init-file)
```

## ライブラリ
[cl-fuseki](https://github.com/madnificent/cl-fuseki.git)

```
* (require 'asdf)
* (asdf:initialize-source-registry)
* (ql:quickload :cl-fuseki)
```

## 実行

```
* (in-package :cl-fuseki-user)
* (defparameter *repository*
  (make-instance 'fuseki::virtuoso-repository :name "DBpedia Japanese"
               :server (make-instance 'fuseki::virtuoso-server
                                      :base-url "http://ja.dbpedia.org/sparql")))
* (setq result
 (query *repository*
      "select distinct * where { ?s ?p ?o .  } LIMIT 10"))
```
