<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Diu', 'Dll', 'Dma', 'Dcr', 'Djs', 'Div', 'Dis');
$month = array('Gen', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dec');
// Veure http://www.php.net/manual/es/function.strftime.php per a definir
// la variable seguent
$datefmt = '%d-%m-%Y a les %H:%M:%S';

$strAccessDenied = 'Access denegat';
$strAction = 'Acció';
$strAddDeleteColumn = 'Afegir/esborrar Camps de Columna';
$strAddDeleteRow = 'Afegir/esborrar fila de criteri';
$strAddNewField = 'Afegir un camp nou';
$strAddPriv = 'Afegir un privilegi nou';
$strAddPrivMessage = 'Has afegit un privilegi nou.';
$strAddSearchConditions = 'Afegeix condicions de recerca (cos de la clàusula "where"):';
$strAddToIndex = 'Afegir columna(es) a l\'index %s&nbsp;';
$strAddUser = 'Afegir un usuari nou';
$strAddUserMessage = 'Has afegit un usuari nou.';
$strAffectedRows = 'Files afectades:';
$strAfter = 'Després %s';
$strAfterInsertBack = 'Tornar';
$strAfterInsertNewInsert = 'Inserta un nou registre';
$strAll = 'Tot';
$strAllTableSameWidth = 'Mostrar totes les taules amb la mateixa amplada?';
$strAlterOrderBy = 'Altera la taula i ordena per';
$strAnalyzeTable = 'Analitza la taula';
$strAnd = 'I';
$strAnIndex = 'S\'ha afegit un index a %s';
$strAny = 'Qualsevol';
$strAnyColumn = 'Qualsevol columna';
$strAnyDatabase = 'Qualsevol base de dades';
$strAnyHost = 'Qualsevol servidor';
$strAnyTable = 'Qualsevol taula';
$strAnyUser = 'Qualsevol usuari';
$strAPrimaryKey = 'S\'ha afegit una clau primària a %s';
$strAscending = 'Ascendent';
$strAtBeginningOfTable = 'Al principi de la taula';
$strAtEndOfTable = 'Al final de la taula';
$strAttr = 'Atributs';

$strBack = 'Enrere';
$strBinary = ' Binari ';
$strBinaryDoNotEdit = ' Binari - no editeu ';
$strBookmarkDeleted = 'S\'ha esborrat el bookmark.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Consulta SQL registrada';
$strBookmarkThis = 'Registra aquesta consulta SQL';
$strBookmarkView = 'Només mirar';
$strBrowse = 'Navega';
$strBzip = '"comprimit amb bzip"';

$strCantLoadMySQL = 'no s\'ha pogut carregar l\'extensió de MySQL,<br />bverifiqueu la configuració del PHP.';
$strCantLoadRecodeIconv = 'No es pot carregar iconv o recodificar una extensió necessaria per a la conversió de jocs de caracters, configura php per permetre l\' ús d\' aquestes extensions o bé desactiva la conversió de jocs de caracters en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'No pots canviar el nom d\'un index a "PRIMARY"!';
$strCantUseRecodeIconv = 'No es pot utilitzar iconv ni libiconv ni la funció recode_string mentre es carrega l\' extensió d\' informes. Comprova la configuració de php.';
$strCardinality = 'Cardinalitat';
$strCarriage = 'Retorn de línia: \\r';
$strChange = 'Canvi';
$strChangeDisplay = 'Tria el camp a mostrar';
$strChangePassword = 'Canvi de contrasenya';
$strCheckAll = 'Verificar-ho tot';
$strCheckDbPriv = 'Verifica els privilegis de la base de dades';
$strCheckTable = 'Verifica la taula';
$strChoosePage = 'Tria una pàgina per editar';
$strColComFeat = 'Mostrant comentaris de les columnes';
$strColumn = 'Columna';
$strColumnNames = 'Nom de les col&middot;lumnes';
$strComments = 'Comentaris';
$strCompleteInserts = 'Completar insercions';
$strConfigFileError = 'phpMyAdmin es incapaç de llegir el fitxer de configuració!<br />Aixó pot succeïr si php troba un error sintàctic en ell o bé php no pot trobar el fitxer.<br />Intenta obrir el fitxer de configuració directament fent servir l\' enllaç següent i comprova el(s) missatge(s) d\'error que rebs. En moltes ocasions una coma o punt i coma falta en algun lloc.<br />Si rebs una plana en blanc, tot está bé.';
$strConfigureTableCoord = 'COnfigura les coordinades per a la taula %s';
$strConfirm = 'Ho vols fer realment ?';
$strCookiesRequired = 'A partir d\'aquest punt es necessari tenir les Cookies activades.';
$strCopyTable = 'Copia taula a (basedades<b>.</b>taula):';
$strCopyTableOK = 'La taula %s ha estat copiada a %s.';
$strCreate = 'Crear';
$strCreateIndex = 'Crea un index a la columna:&nbsp;%s';
$strCreateIndexTopic = 'Crea un nou index';
$strCreateNewDatabase = 'Crea una nova base de dades';
$strCreateNewTable = 'Crear una taula nova a la base de dades %s';
$strCreatePage = 'Crea una nova Pàgina';
$strCreatePdfFeat = 'Creació de PDFs';
$strCriteria = 'Criteris';

$strData = 'Dades';
$strDatabase = 'Base de dades ';
$strDatabaseHasBeenDropped = 'La Base de Dades %s s\'ha eliminat.';
$strDatabases = 'bases de dades';
$strDatabasesStats = 'Estadístiques de les bases de dades';
$strDatabaseWildcard = 'Bases de Dades (es permeten comodins):';
$strDataOnly = 'Només dades';
$strDefault = 'Defecte';
$strDelete = 'Esborrar';
$strDeleted = 'La fila ha estat esborrada';
$strDeletedRows = 'Files esborrades:';
$strDeleteFailed = 'No s\'ha pogut esborrar!';
$strDeleteUserMessage = 'Has esborrat l\'usuari %s.';
$strDescending = 'Descendent';
$strDisabled = 'Desactivat';
$strDisplay = 'Mostrar';
$strDisplayFeat = 'Mostrar característiques';
$strDisplayOrder = 'Ordre del llistat:';
$strDisplayPDF = 'Mostrar esquema PDF';
$strDoAQuery = 'Fer un "petició segons exemple" (comodí: "%")';
$strDocu = 'Documentació';
$strDoYouReally = 'Realment vols ';
$strDrop = 'Eliminar';
$strDropDB = 'Eliminar base de dades %s';
$strDropTable = 'Esborrar taula';
$strDumpingData = 'Volcant dades de la taula';
$strDumpXRows = 'Volcar %s files començant a la fila %s.';
$strDynamic = 'dinàmic';

$strEdit = 'Editar';
$strEditPDFPages = 'Editar pàgines PDF';
$strEditPrivileges = 'Editar privilegis';
$strEffective = 'Efectiu';
$strEmpty = 'Buidar';
$strEmptyResultSet = 'MySQL ha retornat un conjunt buit (p.e. cap fila).';
$strEnabled = 'Activat';
$strEnd = 'Final';
$strEnglishPrivileges = ' Nota: Els noms dels privilegis del MySQL són en llengua anglesa ';
$strError = 'Errada';
$strExport = 'Exportar';
$strExportToXML = 'Exportar a format XML';
$strExtendedInserts = 'Insercions ampliades';
$strExtra = 'Extra';

$strField = 'Camp';
$strFieldHasBeenDropped = 'S\'ha esborrat el camp %s';
$strFields = 'Camps';
$strFieldsEmpty = ' El comptador de camps es buit! ';
$strFieldsEnclosedBy = 'Camps englobats per';
$strFieldsEscapedBy = 'Camps amb marca d\'escape';
$strFieldsTerminatedBy = 'Camps acabats per';
$strFixed = 'fixa';
$strFlushTable = 'Buidar el caché de la taula ("FLUSH")';
$strFormat = 'Format';
$strFormEmpty = 'Falta un valor al formulari !';
$strFullText = 'Textes sencers';
$strFunction = 'Funció';

$strGenBy = 'Generat per';
$strGeneralRelationFeat = 'Característiques generals de relacions';
$strGenTime = 'Temps de generació';
$strGo = 'Executar';
$strGrants = 'Atorgar';
$strGzip = '"comprimit amb gzip"';

$strHasBeenAltered = 'ha estat alterada.';
$strHasBeenCreated = 'ha estat creada.';
$strHaveToShow = 'Has d\' escollir al menys una columna per mostrar';
$strHome = 'Inici';
$strHomepageOfficial = 'Plana oficial del phpMyAdmin';
$strHomepageSourceforge = 'Plana de descàrrega del phpMyAdmin a SourceForge';
$strHost = 'Servidor';
$strHostEmpty = 'El nom del servidor ès buit!';

$strIdxFulltext = 'Texte sencer';
$strIfYouWish = 'Si només vols carregar algunes col.lumnes de la taula, especifica-ho amb una llista separada per comes.';
$strIgnore = 'Ignora';
$strIndex = 'Index';
$strIndexes = 'Indexos';
$strIndexHasBeenDropped = 'S\'ha esborrat l\'index %s';
$strIndexName = 'Nom d\'index&nbsp;:';
$strIndexType = 'Tipus d\'index&nbsp;:';
$strInsert = 'Inserta';
$strInsertAsNewRow = 'Insertar com a nova fila';
$strInsertedRows = 'Files Inserides:';
$strInsertNewRow = 'Inserir nova fila';
$strInsertTextfiles = 'Inserir fitxers de text a la taula';
$strInstructions = 'Instruccions';
$strInUse = 'en use';
$strInvalidName = '"%s" és una paraula reservada, no es pot fer servir com a nom de base de dades/taula/camp.';

$strKeepPass = 'No canviis la contrasenya';
$strKeyname = 'Nom Clau';
$strKill = 'Finalitzar';

$strLength = 'Longitut';
$strLengthSet = 'Longitut/Valors*';
$strLimitNumRows = 'registres per plana';
$strLineFeed = 'Salt de línia: \\n';
$strLines = 'Línies';
$strLinesTerminatedBy = 'Linies terminades per';
$strLinkNotFound = 'L\' enllaç no s\'ha trobat';
$strLinksTo = 'Enllaços a';
$strLocationTextfile = 'Ubicació del fitxer de text';
$strLogin = 'Identificació';
$strLogout = 'Sortir';
$strLogPassword = 'Contrasenya:';
$strLogUsername = 'Nom d\'Usuari:';

$strMissingBracket = 'Falta una clau (\{ o bé \})';
$strModifications = 'Les modificacions han estat guardades';
$strModify = 'Modificar';
$strModifyIndexTopic = 'Modifica un index';
$strMoveTable = 'Mou taula a (base dades<b>.</b>taula):';
$strMoveTableOK = 'Taula %s moguda a %s.';
$strMySQLCharset = 'Joc de caracters de MySQL';
$strMySQLReloaded = 'MySQL reiniciat.';
$strMySQLSaid = 'MySQL diu: ';
$strMySQLServerProcess = 'MySQL %pma_s1% executant-se a %pma_s2% com a %pma_s3%';
$strMySQLShowProcess = 'Mostrar processos';
$strMySQLShowStatus = 'Mostra la informació de funcionament del MySQL';
$strMySQLShowVars = 'Mostra les variables de sistema del MySQL';

$strName = 'Nom';
$strNext = 'Següent';
$strNo = 'No';
$strNoDatabases = 'No hi han Bases de Dades';
$strNoDescription = 'Sense Descripció';
$strNoDropDatabases = 'Instrucció "DROP DATABASE" desactivada.';
$strNoFrames = 'phpMyAdmin és més facil amb un navegador que <b>suporti marcs (frames)</b>.';
$strNoIndex = 'No s\'ha definit l\'index!';
$strNoIndexPartsDefined = 'No s\'han definit patrts de l\'index!';
$strNoModification = 'Sense canvis';
$strNone = 'Res';
$strNoPassword = 'Sense contrassenya';
$strNoPhp = 'Sense codi PHP';
$strNoPrivileges = 'Sense privilegis';
$strNoQuery = 'No és una consulta SQL!';
$strNoRights = 'No tens prou privilegis per visualitzar aquesta informació!';
$strNoTablesFound = 'Base de dades sense taules.';
$strNotNumber = 'Aquest valor no és un número!';
$strNotOK = 'Incorrecte';
$strNotSet = 'Taula <b>%s</b> no trobada o no definida a %s';
$strNotValidNumber = ' no es un número de col.lumna vàlid!';
$strNoUsersFound = 'No s\'han trobat usuaris.';
$strNull = 'Nul';
$strNumSearchResultsInTable = '%s resultat(s) a la taula <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultat(s)';

$strOftenQuotation = 'Marques sintàctiques. OPCIONALMENT vol dir que només els camps de tipus char i varchar van "tancats dins" "-aquest caràcter.';
$strOK = 'Correcte';
$strOperations = 'Operacions';
$strOptimizeTable = 'Optimitza la taula';
$strOptionalControls = 'Opcional. Controla com llegir o escriure caràcters especials.';
$strOptionally = 'OPCIONALMENT';
$strOptions = 'Opcions';
$strOr = 'O';

$strPageNumber = 'Numero de pàgina:';
$strPartialText = 'Textes Parcials';
$strPassword = 'Contrasenya';
$strPasswordEmpty = 'La contrasenya és buida!';
$strPasswordNotSame = 'Les contrasenyes no coincideixen!';
$strPdfDbSchema = 'Esquema de la base de dades "%s" - Pàgina %s';
$strPdfInvalidPageNum = 'Numero de pàgina PDF no definida!';
$strPdfInvalidTblName = 'La taula "%s" no existeix!';
$strPdfNoTables = 'No hi han taules';
$strPhp = 'Crear codi PHP';
$strPHPVersion = 'PHP versió';
$strPmaDocumentation = 'Documentació de phpMyAdmin';
$strPmaUriError = 'La directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> HA d\'estar al fitxer de configuraci&oacute;!';
$strPos1 = 'Inici';
$strPrevious = 'Anterior';
$strPrimary = 'Primària';
$strPrimaryKey = 'Clau Primària';
$strPrimaryKeyHasBeenDropped = 'S\'ha esborrat la clau principal';
$strPrimaryKeyName = 'El nom de la clau principal ha de ser ... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>ha de ser</b> el nom i <b>nomès</b>el nom de la clau principal!)';
$strPrintView = 'Imprimir vista';
$strPrivileges = 'Privilegis';
$strProperties = 'Propietats';

$strQBE = 'Consulta segons exemple';
$strQBEDel = 'Sup';
$strQBEIns = 'Ins';
$strQueryOnDb = 'Consulta SQL a la base de dades <b>%s</b>:';

$strRecords = 'Registres';
$strReferentialIntegrity = 'Comprova la integritat referencial:';
$strRelationNotWorking = 'Les característiques adicionals per a treballar amb taules enllaçades s\'han desactivat. Per saber perqué clica %aquí%s.';
$strRelationView = 'Vista de Relacions';
$strReloadFailed = 'El reinici del MySQL ha fallat';
$strReloadMySQL = 'Rellegir el MySQL';
$strRememberReload = 'Recorda reiniciar el MySQL';
$strRenameTable = 'Renombrar les taules a';
$strRenameTableOK = 'La taula %s ha canviat de nom. Ara es diu %s';
$strRepairTable = 'Reparar taula';
$strReplace = 'Substituïr';
$strReplaceTable = 'Substituïr les dades de la taula pel fitxer ';
$strReset = 'Esborrar';
$strReType = 'Re-escriure';
$strRevoke = 'Revocar';
$strRevokeGrant = 'Revocar garantia';
$strRevokeGrantMessage = 'Has revocat la garantia de privilegis per a %s';
$strRevokeMessage = 'Has revocat els privilegis per %s';
$strRevokePriv = 'Revocar privilegis';
$strRowLength = 'Longitud de fila';
$strRows = 'Fila';
$strRowsFrom = 'Files començant des de';
$strRowSize = ' tamany de fila ';
$strRowsModeHorizontal = 'horizontal';
$strRowsModeOptions=" en modus %s i repeteix capçaleres després de %s cel.les ";
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estadística de files';
$strRunning = 'funcionant a %s';
$strRunQuery = 'Executa consulta';
$strRunSQLQuery = 'Executa consulta/s SQL a la Base de Dades %s';

$strSave = 'Guardar';
$strScaleFactorSmall = 'El factor de l\'escala és massa petit per posar l\'esquema en una pàgina';
$strSearch = 'Cercar';
$strSearchFormTitle = 'Cercar a la base de dades';
$strSearchInTables = 'A la(les) taula(es):';
$strSearchNeedle = 'Paraula(es) o valor(s) a cercar (comodí: "%"):';
$strSearchOption1 = 'al menys una d\'aquestes paraules';
$strSearchOption2 = 'Totes les paraules';
$strSearchOption3 = 'La frase exacta';
$strSearchOption4 = 'com a expresió regular';
$strSearchResultsFor = 'Resultats de la recerca per a "<i>%s</i>" %s:';
$strSearchType = 'Trobat:';
$strSelect = 'Sel&middot;lecciona';
$strSelectADb = 'Selecciona una Base de Dades';
$strSelectAll = 'Selecciona Tot';
$strSelectFields = 'Sel&middot;lecciona els camps (un com a mínim):';
$strSelectNumRows = 'en consulta';
$strSelectTables = 'Selecciona Taules';
$strSend = 'enviar';
$strServerChoice = 'Elecció de Servidor';
$strServerVersion = 'Versió del servidor';
$strSetEnumVal = 'Si el tipus de camp es "enum" o "set", entra els valors fen servir el format: \'a\',\'b\',\'c\'...<br />Si mai necessites escriure la barra invertida ("\") o la cometa simple ("\'") abans d\'aquests valors, escriu barres invertides (per exemple \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Mostra';
$strShowAll = 'Mostra tot';
$strShowColor = 'Mostrar color';
$strShowCols = 'Mostra columnes';
$strShowGrid = 'Mostrar graella';
$strShowingRecords = 'Mostrant registres: ';
$strShowPHPInfo = 'Mostra informació de PHP';
$strShowTableDimension = 'Mostrar dimensió de les taules';
$strShowTables = 'Mostra taules';
$strShowThisQuery = ' Mostra aquesta consulta de nou ';
$strSingly = '(singly)';
$strSize = 'Mida';
$strSort = 'Clasificació';
$strSpaceUsage = 'Utilització d\'espai';
$strSplitWordsWithSpace = 'Paraules separades per un espai (" ").';
$strSQL = 'SQL';
$strSQLQuery = 'crida SQL';
$strSQLResult = 'Resultat SQL';
$strStatement = 'Sentències';
$strStrucCSV = 'dades CSV ';
$strStrucData = 'Estructura i dades';
$strStrucDrop = 'Afegir \'drop table\'';
$strStrucExcelCSV = 'CSV per dades de Ms Excel';
$strStrucOnly = 'Només l\'estructura';
$strStructPropose = 'Proposa una estructura de taula';
$strStructure = 'Estructura';
$strSubmit = 'Enviar';
$strSuccess = 'La vostra comanda SQL ha estat executada amb èxit';
$strSum = 'Suma';

$strTable = 'taula ';
$strTableComments = 'Comentaris de la taula';
$strTableEmpty = 'El nom de la taula és buit!';
$strTableHasBeenDropped = 'S\'ha esborrat la taula %s';
$strTableHasBeenEmptied = 'S\'ha buidat la taula %s';
$strTableHasBeenFlushed = 'S\'ha buidat el caché de la taula %s';
$strTableMaintenance = 'Manteniment de la taula';
$strTables = '%s taula(es)';
$strTableStructure = 'Estructura de la taula';
$strTableType = 'Tipus de taula';
$strTextAreaLength = ' A causa de la seva longitud,<br /> aquest camp pot no ser editable ';
$strTheContent = 'El contingut del fitxer especificat ha estat inserit.';
$strTheContents = 'El contingut del fitxer substituïrà els continguts de les taules sel&middot;leccionades a les files que contenen la mateixa clau única o primària';
$strTheTerminator = 'El separador de camps.';
$strTotal = 'total';
$strType = 'Tipus';

$strUncheckAll = 'Descel.leccionar tot';
$strUnique = 'Única';
$strUnselectAll = 'Deselecciona Tot';
$strUpdatePrivMessage = 'Heu actualitzat els privilegis de %s.';
$strUpdateProfile = 'Actualitza perfil:';
$strUpdateProfileMessage = 'S\'ha actualitzat el perfil.';
$strUpdateQuery = 'Actualitza consulta';
$strUsage = 'Ús';
$strUseBackquotes = 'Usa "backquotes" amb taules i noms de camps';
$strUser = 'Usuari';
$strUserEmpty = 'El nom d\'usuari és buit!';
$strUserName = 'Nom d\'usuari';
$strUsers = 'Usuaris';
$strUseTables = 'Usa Taules';

$strValue = 'Valor';
$strViewDump = 'Veure un esquema de la taula';
$strViewDumpDB = 'Veure l\'esquema de la base de dades';

$strWelcome = 'Benvingut a %s';
$strWithChecked = 'Amb marca:';
$strWrongUser = 'Usuari i/o clau erronis. Access denegat.';

$strYes = 'Si';

$strZip = '"comprimit amb zip"';
// To translate

$strBeginCut = 'BEGIN CUT';  //to translate
$strBeginRaw = 'BEGIN RAW';  //to translate

$strCharsetOfFile = 'Character set of the file:'; //to translate

$strEndCut = 'END CUT';  //to translate
$strEndRaw = 'END RAW';  //to translate
$strExplain = 'Explain SQL';  //to translate

$strNoExplain = 'Skip Explain SQL';  //to translate
$strNoValidateSQL = 'Skip Validate SQL';  //to translate

$strOverhead = 'Overhead'; //to translate

$strSQLParserBugMessage = 'There is a chance that you may have found a bug in the SQL parser. Please examine your query closely, and check that the quotes are correct and not mis-matched. Other possible failure causes may be that you are uploading a file with binary outside of a quoted text area. You can also try your query on the MySQL command line interface. The MySQL server error output below, if there is any, may also help you in diagnosing the problem. If you still have problems or if the parser fails where the command line interface succeeds, please reduce your SQL query input to the single query that causes problems, and submit a bug report with the data chunk in the CUT section below:';  //to translate
$strSQLParserUserError = 'There seems to be an error in your SQL query. The MySQL server error output below, if there is any, may also help you in diagnosing the problem';  //to translate
$strSQPBugInvalidIdentifer = 'Invalid Identifer';  //to translate
$strSQPBugUnclosedQuote = 'Unclosed quote';  //to translate
$strSQPBugUnknownPunctuation = 'Unknown Punctuation String';  //to translate

$strValidateSQL = 'Validate SQL';  //to translate

$strInsecureMySQL = 'Your configuration file contains settings (root with no password) that correspond to the default MySQL privileged account. Your MySQL server is running with this default, is open to intrusion, and you really should fix this security hole.';  //to translate
$strWebServerUploadDirectory = 'web-server upload directory';  //to translate
$strWebServerUploadDirectoryError = 'The directory you set for upload work cannot be reached';  //to translate
$strValidatorError = 'The SQL validator could not be initialized. Please check if you have installed the necessary php extensions as described in the %sdocumentation%s.'; //to translate
$strServer = 'Server %s';  //to translate
$strCvsData = 'CSV data';  //to translate
$strPutColNames = 'Put fields names at first row';  //to translate
?>
