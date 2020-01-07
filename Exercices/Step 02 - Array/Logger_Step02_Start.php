<?php
/**
 * Created by PhpStorm.
 * User: Nicolas Glassey
 * Date: 21.11.2018
 * Time: 22:15
 * Title : RefreshFunction.php
 */

//<editor-fold desc="private attributes"> //add region in phpstorm -> https://blog.jetbrains.com/phpstorm/2012/03/new-in-4-0-custom-code-folding-regions/
$logName = "application.log";//define log file name
$fileFullPath = setFullPath($logName);
$logHeader = "TimeStamp\t\t\tLevel\tMessage";//set the header of the future log file
//</editor-fold>

//<editor-fold desc="tests automation - entry point">
//create file and set header
writeMsgInFile($fileFullPath, $logHeader, true);

//http://php.net/manual/en/language.types.array.php
$testValues = array(
    "1" => array(1,"This is an info",),
    "2" => array(2, "This a warning"),
    "3" => array(3, "This an error"),
    "4" => array(24, "This an unknown"),
    "5" => array(1, "Too short"),
    "6" => array(1, "This is a very long info message")
);

foreach ($testValues as $msg)
{
    //TODO - a good place to prepare the message
    writeMsgInFile($fileFullPath, $msg[1], false);


}
//</editor-fold>

//<editor-fold desc="function">
/**
 * This function is designed to append a path with the fileName received as parameter
 * -The path will be found by the function
 * @param $fName : The file name to be append to the path
 * @return [String] full path to the log file expressed as a string
 * @example File Name : testFile.log / after function : [pathToFile]\testFile.log
 */
function setFullPath($fName)
{
    /* Help
        get current directory -> http://php.net/manual/en/function.getcwd.php
    */

    $currentPath = getcwd();
    $fullPathToFile = $currentPath . "\\" . $fName;
    return $fullPathToFile;
}

/**
 * This function is designed to write a string message in a file.
 * -The opening and closing action is managed by the fuction
 * @param $fileFullPath : The path containing expressing the path from the root to the filename
 * @param $lineToWrite : Is the content to write in the file.
 * @param $erase : Is an option allowing to erase the file before writing or happening the $lineToWrite a the end of the file
 */
function writeMsgInFile($fileFullPath, $lineToWrite, $erase)
{
    /* Help
    //http://php.net/manual/en/function.fopen.php
    */

    $strWriter = null;
    if($erase){
        $strWriter = fopen($fileFullPath, "w+");
    }
    else{
        $strWriter = fopen($fileFullPath, "a");
        $lineToWrite = $lineToWrite;
    }

    fwrite($strWriter, $lineToWrite  . "\r\n");
    fclose($strWriter);
}


/**
 * This function is designed to prepare the message to be written in the log
 * @param $msg : Contents the message
 * @param $levelNumber : Contents the level of message ("Warning", "Info",...)
 * @return string : Gets the message ready to be written
 * @example INPUT : $msg = "My message"
 *          INPUT : $levelNumber = 1
 *          OUTPUT: TIMESTAMP   Info MyMessage
 *
 *          TIMESTAMP FORMAT : 2018-01-30 12:15:59
 *
 *          The separator between each fields is the tab ("\t")
 */
function prepareMsgToWrite($msg, $levelNumber)
{
    /*Help
	http://php.net/manual/en/function.date.php
	*/
    //TODO - good place to code ;)
    //TODO - a good place to convert level in level description
}

/**
 * This function is designed to convert the log level from int to string description
 * @param $levelNumber
 * @return string - The level description
 * @example Value 1 becomes "Info"
 *          Value 2 becomes "Warning"
 *          Value 3 becomes "Error"
 *          Value up to 3 becomes "Unkown"
 */
function convertLevelIntToDescription($levelNumber)
{
    /*Help
    http://php.net/manual/en/control-structures.switch.php
    */
    $levelDescription = "";

    //TODO - good place to code ?    
}

//</editor-fold>
?>