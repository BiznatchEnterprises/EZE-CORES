# EZE-CORES
Script Framework written in PHP

EZE-CORES Design

EZE-CORES separates web-applications into Layout content (html, xhtml, css, javascript), PHP scripting, and an “engine” file that embeds variables from scripting directly into the layout content as requested.

Internal Classes
- Functions that are built directly into index.php
- Functions included via external .php script into index.php

Global Settings
- Dynamically controls most aspects of your projects from one place.

Plug-in Sectors
- Build external scripts and layouts into “plugins” that can be embedded into html or used in scripting. These are generated at runtime then, re-used anywhere using $output = LoadXplugin(number).

Action Sectors
- Actions are specific sections of dynamically controlled Scripts and Layouts (pages/commands/etc).

Dynamic Core Sectors 
- Quickly customize the "environment" that runs all the above dynamically. 
- Core sectors can be used to maintain the basic framework but create a dynamic foundation that all plugins and templates are loaded.

# Contribute to development
Please donate cryptocoins:

- Bitcoin: 13M7r7VAty1HzCcktfPDKKZg2RXUJKN71P
- BitConnect: 8QAa8dxG2VNoaKZAM17Tvv1T6uUcW4uFB3
- Litecoin: LfYzJ3uufV1qFoRsdHpCHPD7KftbF3258S
- Peercoin: PJowpqy1He2E31FAthxSNJcSgvb7FtM2pB
- Bata: BD5DTxrmKL1dHHP5GugxEsxRV7JaZuf1Pr
- Dash: XgeV36SBHeD2z2iGQrXhQTMtLcPqLc9n6r
- Stratis: SP5LS9dNZFCAc1zwb5XxAphL8NNxiiCXUD
- Pivx: DHqjEFz9swTD5ZnSKqCG4hHbAdWik59TKP
- ZCoin: a1f5bcEStZCLRYWArzZNPsNp97P1aEutJD
- Crypto Bullion: 5eyhaXqyBZhAnUmRuSKTiFuxtQ8ok1x642
- GoldCoin: E4RAQkk5JzYi9q7S6UBd9L74Qqzkgpf8QT


Copyright (c) 2002 Biznatch Enterprises,
All rights reserved.

Redistribution and use in source and binary forms are permitted
provided that the above copyright notice and this paragraph are
duplicated in all such forms and that any documentation,
advertising materials, and other materials related to such
distribution and use acknowledge that the software was developed
by Biznatch Enterprises. The name of the
EZE-CORES or Biznatch Enterprises may not be used to endorse or promote products derived
from this software without specific prior written permission.
THIS SOFTWARE IS PROVIDED ``AS IS'' AND WITHOUT ANY EXPRESS OR
IMPLIED WARRANTIES, INCLUDING, WITHOUT LIMITATION, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE.
