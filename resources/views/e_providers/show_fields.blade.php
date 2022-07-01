<div class="col">
    <h3>Provider Details</h3>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <p><strong>Name : </strong> {{ $eProvider->name }}</p>
            <p><strong>Phone : </strong>{{ $eProvider->phone_number }}</p>
            <p><strong>Mobile No. : </strong> {{ $eProvider->mobile_number }}</p>
            <p><strong>Adhaar Number : </strong> {{ $eProvider->aadhaar_no }}</p>
            <p><strong>Date of Birth : </strong> {{ $eProvider->dob }}</p>
            <p><strong>Gender : </strong> {{ $eProvider->dob }}</p>
            <p><strong>Permanent Address: </strong> {!! $eProvider->permanent_address !!}</p>
            <p><strong>Education : </strong> {{ $eProvider->education }}</p>
            <p><strong>Certification : </strong> {{ $eProvider->certification }}</p>

        </div>
        <div class="col-md-6">
            <p><strong>Availability Range: </strong> {{ $eProvider->availability_range }}</p>
            <p><strong>Featured : </strong>
                @if ($eProvider->featured)
                    <span class="badge badge-success">Yes</span>
                @else
                    <span class="badge badge-danger">No</span>
                @endif
            </p>
            <p><strong>Accedpted :</strong>
                @if ($eProvider->accepted)
                    <span class="badge badge-success">Yes</span>
                @else
                    <span class="badge badge-danger">No</span>
                @endif
            </p>
            <p><strong>Experience : </strong>
                @if ($eProvider->experience)
                    <span class="badge badge-success">Yes</span>
                @else
                    <span class="badge badge-danger">No</span>
                @endif
            </p>
            <p><strong>Services : </strong> {!! $eProvider->services !!}</p>
            <p><strong>Work Address : </strong> {{ $eProvider->work_address }}</p>
            <p><strong>Pincode : </strong> {{ $eProvider->pincode }}</p>
            <p><strong>Years of Experience : </strong> {{ $eProvider->years_of_experience }}</p>
            <p><strong>Id Proof : </strong> <a href="{{ asset('public/' . $eProvider->id_proof) }}"><i
                        class="fa fa-eye"></i> View</a></p>
            <p><strong>Address Proof : </strong><a href="{{ asset('public/' . $eProvider->address_proof) }}"><i
                        class="fa fa-eye"></i> View</a></p>
            </p>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>Description</h3>
            {!! $eProvider->description !!}
        </div>
    </div>
</div>
