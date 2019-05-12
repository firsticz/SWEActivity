<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActivityController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->view('insertAc');
    }
    public function show()
	{
        $this->load->view('activity');
    }
    public function testinsert(Type $var = null)
     {
         $this->load->view('testinsert');
     }

    public function insertActivity()
    {
        $activityName = isset($_POST['activityName'])?$_POST['activityName']:"";
        $activityDetail = isset($_POST['activityDetail'])?$_POST['activityDetail']:"";
 

        $oldstartDate = isset($_POST['startDate'])?$_POST['startDate']:"";
        $oldendDate = isset($_POST['endDate'])?$_POST['endDate']:"";
        $date = str_replace('/', '-', $oldstartDate );
        $startDate = date("Y-m-d h:i:s", strtotime($date));
        $date2 = str_replace('/', '-', $oldendDate );
        $endDate = date("Y-m-d h:i:s", strtotime($date2));
        // $studentYear = isset($_POST['studentYear'])?$_POST['studentYear']:"";
        $stryear="";
        for($i=0;$i<count($_POST["studentYear"]);$i++)
        {
            if(trim($_POST["studentYear"][$i]) != "")
            {
                $stryear .= $_POST["studentYear"][$i];
            }
        }
        $year = isset($_POST['year'])?$_POST['year']:"";
        $term = isset($_POST['term'])?$_POST['term']:"";
        $data = array(
            'activityName' => $activityName,
            'activityDetail' => $activityDetail,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'studentYear' => $stryear,
            'year' => $year,
            'term' => $term
        );
        $this->load->model('Activity');
        $result = $this->Activity->insertActivity($data);
        if($result){
			echo "<script>alert('บันทึกสำเร็จ');
				window.location.href='index';
				</script>";
		}else{
			echo "<script>alert('บันทึกไม่สำเร็จ');
				window.location.href='index';
				</script>";
		}
    }
    public function updateActivity()
    {
        $id = isset($_POST['id'])?$_POST['id']:"";
        $activityName = isset($_POST['activityName'])?$_POST['activityName']:"";
        $activityDetail = isset($_POST['activityDetail'])?$_POST['activityDetail']:"";
        $startDate = isset($_POST['startDate'])?$_POST['startDate']:"";
        $endDate = isset($_POST['endDate'])?$_POST['endDate']:"";
        $studentYear = isset($_POST['studentYear'])?$_POST['studentYear']:"";
        $year = isset($_POST['year'])?$_POST['year']:"";
        $term = isset($_POST['term'])?$_POST['term']:"";
        $data = array(
            'activityName' => $activityName,
            'activityDetail' => $activityDetail,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'studentYear' => $studentYear,
            'year' => $year,
            'term' => $term
        );
        $this->load->model('Activity');
		$result = $this->Activity->updateActivity($id, $data);
    }
    public function deleteActivity()
    {
        $id = isset($_POST['id'])?$_POST['id']:"";
        
    }


}
?>