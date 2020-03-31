<?php

namespace App\Controller;

use COM;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
const RFC_OK = 0;

class ConfigController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
    /*    $NumByRef = 0;
        $StrByRef = "";

        $conn = "ASHOST=172.17.10.56, SYSNR=00, CLIENT=400, USER=TI_FUNCIONAL, PASSWD=TICh1mu202003$";

        $SAP = new COM("COMNWRFC") or die ("Can't create object");

        $SAP->ErrorMsgTarget = 1; //In a normal case 2

        $hRFC = $SAP->RfcOpenConnection($conn);
        if ($hRFC == 0) {
            echo "RfcOpenConnection not successful";
            $SAP = null;
            exit(1);
        }

        $hFuncDesc = $SAP->RfcGetFunctionDesc($hRFC, "RFC_READ_TABLE");
        if ($hFuncDesc == 0) {
            echo "RfcGetFunctionDesc not successful";
            $rc = $SAP->RfcCloseConnection($hRFC);
            $SAP = null;
            exit(1);
        }

        $hFunc = $SAP->RfcCreateFunction($hFuncDesc);
        if ($hFunc == 0) {
            echo "RfcCreateFunction not successful";
            $rc = $SAP->RfcCloseConnection($hRFC);
            $SAP = null;
            exit(1);
        }

        $rc = $SAP->RfcSetChars($hFunc, "QUERY_TABLE", $_POST["tablename"]);
        $rc = $SAP->RfcSetChars($hFunc, "DELIMITER", "~");

        $rc = $SAP->RfcInvoke($hRFC, $hFunc);
        if ($rc == RFC_OK) {
            $rc = $SAP->RfcGetTable($hFunc, "DATA", $NumByRef);
            if ($rc == RFC_OK) {
                echo "<table border=\"1\">";
                $hTable = $SAP->lngByRef();
                $rc = $SAP->RfcGetRowCount($hTable, $NumByRef);
                $RowCount = $SAP->lngByRef();
                $rc = $SAP->RfcMoveToFirstRow($hTable);
                for ($i = 1; $i <= $RowCount; $i++){
                    echo "<tr>";
                    $hRow = $SAP->RfcGetCurrentRow($hTable);
                    $rc = $SAP->RfcGetChars($hRow, "WA", $StrByRef, 512);
                    $charBuffer = $SAP->strByRef();
                    $fields = explode("~", $charBuffer);
                    foreach ($fields as $field){
                        echo "<td>". $field . "</td>";
                    }
                    if ($i < $RowCount) {
                        $rc = $SAP->RfcMoveToNextRow($hTable);
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        }

        $rc = $SAP->RfcDestroyFunction($hFunc);
        $rc = $SAP->RfcCloseConnection($hRFC);
        $SAP = null;*/

        return $this->render('config/index.html.twig', [
            'controller_name' => 'ConfigController',
        ]);
    }
}
