<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;


class WorkplanTest extends TestCase
{

    /** @test **/
    public function a_user_can_record_the_beginning_of_his_workday()
    {
        $activity = factory('App\Activity')->create();
    }

    /** @test **/
    public function a_user_can_record_the_beginning_of_his_break(){

    }

    /** @test **/
    public function a_user_can_record_the_end_of_his_break(){

    }

    /** @test **/
    public function a_user_can_record_the_end_of_his_workday(){

    }

    /** @test **/
    public function a_manager_can_see_records_of_a_given_user(){
        
    }



}
