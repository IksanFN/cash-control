@extends('errors::master')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: "You can't access this page."))
