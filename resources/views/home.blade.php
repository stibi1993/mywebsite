@extends('layouts.app')

@section('content')
<h2>Sections</h2>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        About me</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body" style="color:#412C2C">
        <div class="row">
          <div class="col-md-10">
            My name is Tibor Seres and I am 23 years old
            former Business IT student after receiving my diploma this July. I currently live in Budapest. My hobbies are playing music, doing some sports (so many), watching movies and series (more than many), learning different languages and cultures and being a hobby photographer and film maker.
          </div>
          <div class="col-md-2">
            <img src="{{URL::asset('/images/me.jpg')}}" alt="profile Pic" height="100" width="100" style="border-radius:5px;">
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        School and education</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body" style="color:#412C2C">
        <ul>
          <li class="list-group">2008-2013: Dunakeszi Radnóti Miklós Gynasium - Math faculty</li>
          <li class="list-group">2013-2017: Corvinus University of Budapest - Business Information Technology - excellent qualification -Grade of diploma: 4.82 </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Skills</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body" style="color:#412C2C">

          <ul>
            <li class="list-group">Programming Skills: </li>

              <ul>
                <li class="list-group-">Advanced active knowledge: Web dev. languages (html5, css3, Javascript, jquery, ), PHP, SQL, MySQL</li>
                <li class="list-group">Basic active knowledge (currently learning!!): PHP-Python frameworks (Django&Laravel), R,  Backend config (Ruby)</li>
                <li class="list-group">Not active knowledge: C#, JAVA, Visual Basic, </li>
                <li class="list-group">Version controll: git, github + heroku </li>
              </ul>
            <li class="list-group">Graphic & motion design: Photoshop, Premiere Pro, After Effects, Illustrator</li>
            <li class="list-group">Microsoft Office pack (Excel, Word, Powerpoint)</li>
          </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
        Work experience</a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body" style="color:#412C2C">
        <ul>
          <li class="list-group">2015-2016: E.ON Hungaria Zrt. - IT department: Business developer and Cloud infrastructure researcher</li>
          <li class="list-group">2017-: SAP Hungary - Cloud Supporting Team: Cloud Delivery Intern & PHP developer</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
        Language skills</a>
      </h4>
    </div>
    <div id="collapse5" class="panel-collapse collapse">
      <div class="panel-body" style="color:#412C2C">
        <ul>
          <li class="list-group">English: ECL C1 - Proficiency Certificate </li>
          <li class="list-group">German: Goethe C1 - Proficiency Certificate </li>
          <li class="list-group">Spanish: Corvinus B2 (Economy science related language) - Proficiency Certificate  </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
        My personality</a>
      </h4>
    </div>
    <div id="collapse6" class="panel-collapse collapse">
      <div class="panel-body" style="color:#412C2C">Well, it sounds weird to say but I'm kind of mixed person. Honestly, I'm not a professional of any above mentioned field but I have a wide spectrum even though I know those only a litte but more than a beginner. And that represents my general personality as well. I really like learning new stuffs and luckily I have a wide interest.  If there is something I intrested in then I look for it and always dig deeply in the topic. I think this is important to show enhusiams and passion and be open to the new fields to acquire more skills. Besides, I consider myself as a person who pursues his desire and does everything to reach its goals and searches for challenges to push the limits. :)  </div>
    </div>
  </div>
</div>
@endsection

@section('sidebar')
  @parent

@endsection
