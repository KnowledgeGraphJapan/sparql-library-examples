# Apache Jena ARQ

## ライブラリ
このディレクトリにapache-jena-3.4.0がすでに展開されている。
もしライブラリ全体が必要な場合は、[Download](https://jena.apache.org/download/index.cgi)からapache-jena-3.4.0.tar.gzか.zipをダウンロード。
Mavenでインストールしたい場合は [Using Jena with Apache Maven](https://jena.apache.org/download/maven.html)を参照のこと。

## コマンドでの実行

```
$ cd src
$ javac -cp '../lib/*' ex/Select1.java
$ java -cp '../lib/*:.' ex.Select1
```

## Eclipseでの実行

Import Existing Projects => このディレクトリを指定
"Run"で実行
