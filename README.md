[![CI Status](https://github.com/vufind-org/vufind-marc/actions/workflows/ci.yaml/badge.svg?branch=dev)](https://github.com/vufind-org/vufind-marc/actions/workflows/ci.yaml)

VuFind-Marc
===========

Introduction
------------
VuFind-Marc contains classes to handle [MARC records](https://www.loc.gov/marc/) in
different carrier formats. This is part of the [VuFind® project](http://vufind.org)
but may also be useful for other purposes.

Features
--------
VuFind-Marc provides functionality for reading MARC records and validating (linting)
MARC 21 records. It supports standalone records as well as record collection files.
Following carrier formats are supported:

- [ISO 2709](https://en.wikipedia.org/wiki/ISO_2709)
- [MARCXML](https://www.loc.gov/standards/marcxml/),
- [MARC-in-JSON](https://web.archive.org/web/20151112001548/http://dilettantes.code4lib.org/blog/2010/09/a-proposal-to-serialize-marc-in-json/)

Additional formats can be added as necessary.

Installation
------------
The recommended method for incorporating this library into your project is to use
Composer (http://getcomposer.org).
