<?php

class Action
{
    public function doSomething($param1,$param2,$param3,$param4,$param5,$param6)
    {
        $return['calc_factor'] = ($param1 + $param3 + $param4 + $param5) * $param6;

        $return['vlr_type'] = $this->doSomethingVlrType($param2);

        return $return;
    }

    public function doSomethingVlrType($param2)
    {
        for ($c = 0; $c < count($param2); $c++) {
            for ($d = 0; $d < count($param2[$c]); $d++) {
		    
                switch($param2[$c]['vlr']) {
                    case ($param2[$c]['vlr'] == 0):
                        $return['vlr_type'] = "FREE";
                        break;
                    case ($param2[$c]['vlr'] >= 0.01 && $param2[$c]['vlr'] <= 10) :
                        $return['vlr_type'] = "CHEAP";
                        break;
                    case ($param2[$c]['vlr'] > 10 && $param2[$c]['vlr'] <= 20):
                        $return['vlr_type'] = "GOOD_VALUE";
                        break;
                    case ($param2[$c]['vlr'] > 20):
                        $return['vlr_type'] = "EXPENSIVE";
                        break;
		            default:
                        $return['vlr_type'] = "";
                        break;
                }
		    
            }
        }
	    
        return $return['vlr_type'];
    }

}
?>
