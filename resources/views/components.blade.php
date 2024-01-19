@extends('layout')
@section('content')
<h3>each componet here has a file under app/view/componet</h3>
<h3>FILE THERE HAS FULL NAME WITHOUT - EX : PageTitle, ListOfListings </h3>
<h5 class="primary secondary">this is title page - no component</h5>
<x-page-title value="click me" classValue=''/>
<x-page-title value="click me" classValue='text-underline'/>
<x-button textValue="click here" classValue="btnClass" />
<x-b-button b="btnClass" a="submit" c="blk" />
<br>
<br>
<x-list-of-listings :a='$alltopics' />
<p style="color:red">below list of users and their emails</p>
<!-- i will explain the component list-of-users, :user is same parameter
given to constructor in ListOfUsers.blade  -->
<x-list-of-users :singleUser=$allmyuser />

<a href="/listings" style="font-weight: bold;color:red">go lisitngs</a>

@endsection