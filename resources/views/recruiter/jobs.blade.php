@extends('layouts.recruiter')

@section('content')
                <div class="col-lg-9 column">
                    <div class="padding-left">
                        <div class="manage-jobs-sec">
                            <h3>Manage Jobs</h3>
                            <div class="extra-job-info">
                                <span><i class="la la-clock-o"></i><strong>9</strong> Job Posted</span>
                                <span><i class="la la-file-text"></i><strong>20</strong> Application</span>
                                <span><i class="la la-users"></i><strong>18</strong> Active Jobs</span>
                            </div>
                            <table>
                                <thead>
                                <tr>
                                    <td>Title</td>
                                    <td>Applications</td>
                                    <td>Created & Expired</td>
                                    <td>Status</td>
                                    <td>Action</td>
                                </tr>
                                </thead>
                                <tbody>
                                {{--Fetching jobs table--}}
                                @foreach($Jobdata as $value)

                                <tr>
                                    <td>
                                        <div class="table-list-title">
                                            <h3><a href="#" title="">{{$value->job_title}}</a></h3>
                                            <span><i class="la la-map-marker"></i>Sacramento, California</span>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="applied-field">3+ Applied</span>
                                    </td>
                                    <td>
                                        <span>October 27, 2017</span><br />
                                        <span>April 25, 2011</span>
                                    </td>
                                    <td>
                                        <span class="status active">Active</span>
                                    </td>
                                    <td>
                                        <ul class="action_job">
                                            <li><span>View Job</span><a href="singleJob" title=""><i class="la la-eye"></i></a></li>
                                            <li><span>Edit</span><a href="#" title=""><i class="la la-pencil"></i></a></li>
                                            <li><span>Delete</span><a href="deleteJob/{{$value->job_id}}" title=""><i class="la la-trash-o"></i></a></li>

                                        </ul>
                                    </td>
                                </tr>
                                @endforeach
                                {{--End of Fetching jobs table--}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
@endsection
@push('BottomExtraScripts')
    <script src="{{@url('js/formEditRecrutier.js')}}" type="text/javascript"></script>
@endpush
