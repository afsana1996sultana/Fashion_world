@extends('layout.frontend.master')
@section('main_content')
<style>
 .customer-service-content{
    padding-left: 5px;
    padding-top: 70px;
}
</style> 
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Company Flowchart</h2>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li>Company Flowchart</li>
            </ul>
        </div>
    </div>
</div>

<section class="categories-banner-area">
    <div class="container-fluid">
        <div class="row pt-5 pb-5">
            <div class="col-lg-7 col-md-10">
                <div class="company-flowchart">
                    <img src="{{url('frontend/assets/img/categories/organogram.png')}}" alt="image">
                </div>
            </div>

            <div class="col-lg-5 col-md-8">
                <div class="customer-service-content">
                <h3><i class='bx bx-sync'></i>Our Flowchart</h3> 
                <p>A process flowchart is a graphical representation of a business process through a flowchart. 
                It's used as a means of getting a top-down understanding of how a process works.</p>
                    <ul>
                        <li>The Process Flowchart or Communication Flow Chart.</li>
                        <li>The Workflow Chart or Workflow Diagram.</li>
                        <li>The Swimlane Flowchart (Describe How Separate Departments, Processes or Employees Interact).</li>
                        <li>The Data Flowchart (Where Data Flows In and Out of an Information System with a Data Flow Diagram).</li>
                        <li>Flowcharts in Manufacturing (Visualizing process flows is extremely valuable in manufacturing, where standardization and uniformity are important).</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection