<?php

namespace App\Http\Controllers;

use Goutte\Client;
use Illuminate\Http\Request;

class ScrapingController extends Controller
{
    private $result=array();
public function scraper(){
    $client=new Client();
    $url='https://172.25.95.42/easy_printable_templates/11/preview?entity_settings=%26export%3Dtrue%26fields%255B%255D%3Dstatus_id%26load_groups_opened%3D0%26operators%255Bstatus_id%255D%3Do%26outputs%255B%255D%3Dlist%26set_filter%3D1%26show_avatars%3D1%26show_sum_row%3D1%26sort%3Dpriority%253Adesc%252Cdue_date%252Cparent%26type%3DEasyIssueQuery&entity_type=EasyIssueQuery&project_id=130';
    $page=$client->request('GET',$url);
    echo "<pre>";
    print_r($page);
    return view('scraper');
}
}
