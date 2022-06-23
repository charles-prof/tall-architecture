I'm only learning so not entirely sure, but if I comment out this section of index.blade.php,
 I am able to load the page in my browser without any errors: {{--}} 
 <div class="form-group">   // https://stackoverflow.com/questions/55503162/how-to-fix-undefined-variable-error-in-laravel
  {!! Form::label('user_id', 'Department Manager:') !!}
   {!! Form::select('user_id', ['' => 'Choose Department Manager'] + $users, null, ['class'=>'form-control']) !!}
 </div>--}} – Ruth Lavelle  // https://laracasts.com/discuss/channels/laravel/laravel-8-undefined-variable-header

 Your relationship on Question (model) to User should be named user instead of users. 
 When you are letting Eloquent automatically figure out the fields for the belongsTo relationship 
 it actually uses the name of the relationship method to help determine what the foreign key is.
 https://stackoverflow.com/questions/66503085/laravel-8-trying-to-get-property-name-of-non-object

For some days no I've been battling with a particular error and it has really wasted my time. user11352561 asked Jul 5, 2019 at 16:18

There will be two possible things: Either there is no field in database whose name ie name Or you are not logged in.

For checking whether user is logged in or not

if(Auth::check())
{
   echo Auth::user()->id;
}

Auth::user()->name doesn't throw an error if there's no column name on the users table; it just echos out (or returns) "". The issue is Auth::user() is returning null. Point 2 is correct, point 1 is not. – 
Tim Lewis Jul 5, 2019 at 16:44 
https://stackoverflow.com/questions/56906429/laravel-trying-to-get-property-name-of-non-object-view-c-xampp-htdocs-jai

Laravel uses sessions to keep track of authenticated users. Its possible that the sessions are timing out, and the user is being logged out.

To avoid this causing issues in your views, I'd advise null checking Auth::user() or making use of Auth::check() with a blade if-block.

If you want to modify the SESSION_LIFETIME, take a look at config/session.php

https://stackoverflow.com/questions/52288946/jquery-datatable-error-cannot-read-property-mdata-of-undefined
You had 6 ths but had 7 tds in both of the rows. The number of th must match with the number of td. Adding a hidden th fixed it
https://stackoverflow.com/questions/25377637/datatables-cannot-read-property-mdata-of-undefined