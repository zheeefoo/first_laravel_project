<x-layout>
    <x-slot name="heading">Job Detail</x-slot>
    <h2>Job Title: {{ $job['title'] }}</h2>
    <h3>Job Description: {{ $job['description'] }}</h3>
    <h3>Job Location: {{ $job['location'] }}</h3>
    <h3>Job Company: {{ $job['company'] }}</h3>
</x-layout>