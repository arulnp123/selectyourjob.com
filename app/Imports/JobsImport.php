<?php

namespace App\Imports;

use App\Models\Bulkjobpost;
use DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;

use Session;
class JobsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //dd($row);
        $city_id = 0;
        if(isset($row['job_location'])){
            $city_name = trim(strtolower($row['job_location']));
            $sql = "select id from cities where lower(cities) = '$city_name'";
            $result = DB::select($sql);
            if(count($result)>0){
                $city_id = $result[0]->id;
            }
        }
      
        $cat_id = 0;
        if(isset($row['job_category'])){
            $cat_name = trim(strtolower($row['job_category']));
            $sql = "select id from categories where lower(name) = '$cat_name'";
            $result = DB::select($sql);
            if(count($result)>0){
                $cat_id = $result[0]->id;
            }
        } 
        return new Bulkjobpost([
            'job_post_id'     => $row['job_post_id'],
            'job_tittle'     => $row['job_tittle'],
            'Job_description'     => $row['job_description'],
            'company_name'     => $row['company_name'],
            'company_location'        =>$row['company_location'], 
            'job_location'          => $city_id, 
            'job_category'          => $cat_id, 
            'experience'          => $row['experience'], 
            'status'           => $row['status'], 
            'phone'  => $row['phone'], 
            'email'  => $row['email'], 
            'salary'    => $row['salary'],
            'websites'    => $row['websites'], 
            'Key_responsibilities'   => $row['key_responsibilities'], 
            'industry'      => $row['industry'], 
            'Skill_experience'      => $row['skill_experience'], 
            'skills_needed'      => $row['skills_needed'], 
            'urgent_need'      => $row['urgent_need'], 
            'deadline_date'      => $row['deadline_date'], 
            'position_available'      => $row['position_available'], 
            'Job_type'      => $row['job_type'], 
            'job_sector'      => $row['job_sector'], 
            'gender'      => $row['gender'], 
            'qualification'      => $row['qualification'],
            'country'      => $row['country'],  
            'complete_address'      => $row['complete_address'], 
            'created_at'      => date('Y-m-d H:i:s'), 
          
           
        ]);
    }

    
}


