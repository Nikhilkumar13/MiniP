<?php

Admin::model(App\Incidents::class)->title('Cases')->with()->filters(function ()
{

})->columns(function ()
{
	Column::string('id', 'Id');
	Column::string('uid', 'Uid');
	Column::date('created_at', 'Date');
	Column::string('location', 'Location');
	Column::string('age', 'Age');
	Column::string('type', 'Type');
	Column::string('gender', 'Gender');
	Column::string('comment', 'Comment');
})->form(function ()
{

})->denyCreating()->denyEditing();