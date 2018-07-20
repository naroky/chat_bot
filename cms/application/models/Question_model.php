<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* User_model
*/
class Question_model extends CI_Model
{
	var $tableName = 'question_keyword';

	function __construct()
	{
		parent::__construct();
	
	}


	function lists()
	{
		$this->db->select("id,question_name,tag,lastupdate");
        $this->db->from($this->tableName);
        //$this->db->where(array('user_id'=>$userID));
        //$this->db->order_by("point_type", "asc");            
        $prevQuery = $this->db->get();
        $prevCheck = $prevQuery->num_rows();
        
        if($prevCheck > 0){
            //$prevResult = $prevQuery->row_array();
            $result_data = $prevQuery->result();
            $result = new \StdClass;
                if (count($result_data) > 0)
                {
                  foreach ($result_data as $row) {
                    $myObj = "";
                    $i=0;
                    foreach ($row as $key => $col) {


                      if (gettype($col) != "object" )
                      {
                        if ($key == "point_type")
                        {
                            $myObj[] = (strval($col));
                            $myObj[] = $point_name[$col];

                        }
                        else
                        {
                            if ($key == "CONTENT")
                            {
                              $result = iconv($str = 'UTF-16LE' , $out_charset = 'UTF-8' , $col);              
                              
                              echo $str."<br/>";
                              $myObj[] = (strval($str));
                            }
                            else
                            {
                              $myObj[] = (strval($col));

                            }
                        }
                        
                      }
                      $i++;
                    }
                    $result->data[] = $myObj;
                  }       
                }
                else
                {
                  $result = "{}";

                }

            
            return $result;                         
        }
        else
        {
            return false;
        }  


		$this->db->select('*');
		$this->db->from('question_keyword');
		$q=$this->db->get();
		return $q->result();		
	}


	function save($data)
	{
		$data["lastupdate"] = date("Y-m-d H:i:s");
		$results = $this->db->insert('question_keyword', $data); 
		return $results;
	}

	function update($id,$data)
	{

		$this->db->where('id', $id);
		$result = $this->db->update('question_keyword', $data);
		echo "result:".$result."<br/>";
		return $result;
	}
	
	function delete($id)
	{

		$this->db->where('id', $id);
		$result = $this->db->delete('question_keyword');
		return $result;
	}	

}
?>