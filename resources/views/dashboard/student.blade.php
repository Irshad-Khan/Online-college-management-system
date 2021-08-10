<div class="mt-8 bg-white rounded">
    @include('alerts.success')
        <div class="w-full max-w-2xl px-6 py-12">
            
            @if($student->is_admitted == 2)
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Roll Number :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="text-gray-600 font-bold">{{ $student->roll_number ?: 'Not assigned yet.' }}</span>
                </div>
            </div>
            @endif
            @if($student->is_admitted == 2)
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Class :
                    </label>
                </div>
                <div class="md:w-2/3 block text-gray-600 font-bold">
                    <span class="text-gray-600 font-bold">{{ optional($student->program)->title ?: 'Not assigned Yet' }}</span>
                </div>
            </div>
            @endif
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Name :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="block text-gray-600 font-bold">{{ optional($student->user)->name }}</span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Email :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="text-gray-600 font-bold">{{ optional($student->user)->email }}</span>
                </div>
            </div>

            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Phone :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="text-gray-600 font-bold">{{ $student->phone }}</span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Gender :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="text-gray-600 font-bold">{{ $student->gender }}</span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Date of Birth :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="text-gray-600 font-bold">{{ $student->dateofbirth }}</span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Current Address :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="text-gray-600 font-bold">{{ $student->current_address }}</span>
                </div>
            </div>
            <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Permanent Address :
                    </label>
                </div>
                <div class="md:w-2/3">
                    <span class="text-gray-600 font-bold">{{ $student->permanent_address }}</span>
                </div>
            </div>

            {{-- <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Student Parent :
                    </label>
                </div>
                <div class="md:w-2/3 block text-gray-600 font-bold">
                    <span class="text-gray-600 font-bold">{{ $student->parent->user->name }}</span>
                </div>
            </div> --}}
            {{-- <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Parent Email :
                    </label>
                </div>
                <div class="md:w-2/3 block text-gray-600 font-bold">
                    <span class="text-gray-600 font-bold">{{ $student->parent->user->email }}</span>
                </div>
            </div> --}}
            {{-- <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Parent Phone :
                    </label>
                </div>
                <div class="md:w-2/3 block text-gray-600 font-bold">
                    <span class="text-gray-600 font-bold">{{ $student->parent->phone }}</span>
                </div>
            </div> --}}
            {{-- <div class="md:flex md:items-center mb-6">
                <div class="md:w-1/3">
                    <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                        Parent Address :
                    </label>
                </div>
                <div class="md:w-2/3 block text-gray-600 font-bold">
                    <span class="text-gray-600 font-bold">{{ $student->parent->current_address }}</span>
                </div>
            </div> --}}
            <div class="px-0 md:px-6 py-12" style="width: 170%">
                <div class="flex items-center bg-gray-200">
                    <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-semibold">Degree Title</div>
                    <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-semibold">Bord/University</div>
                    <div class="w-1/3 text-gray-600 py-2 px-4 font-semibold">Start Date</div>
                    <div class="w-1/3 text-gray-600 py-2 px-4 font-semibold">End Date</div>
                    <div class="w-1/3 text-gray-600 py-2 px-4 font-semibold">Marks/CGPA</div>
                    <div class="w-1/3 text-gray-600 py-2 px-4 font-semibold">Action</div>
                </div>
                <div class="flex items-center justify-between border border-gray-200 -mb-px">
                    <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ optional(optional(auth()->user()->student)->qualification)->degree_title }}</div>
                    <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ optional(optional(auth()->user()->student)->qualification)->board }}</div>
                    <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ (optional(optional(auth()->user()->student)->qualification)->start_date) ? Carbon\Carbon::parse(optional(optional(auth()->user()->student)->qualification)->start_date)->format('M Y') : '' }}</div>
                    <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ (optional(optional(auth()->user()->student)->qualification)->end_date) ? Carbon\Carbon::parse(optional(optional(auth()->user()->student)->qualification)->end_date)->format('M Y') : '' }}</div>
                    <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ optional(optional(auth()->user()->student)->qualification)->marks }}</div>
                    <div class="w-1/3 flex items-center justify-start px-3">
                        @if(!empty(optional(optional(auth()->user()->student)->qualification)->id))
                        <a href="{{ route('student.edit',optional(optional(auth()->user()->student)->qualification)->id) }}" class="ml-1">
                            <svg class="h-6 w-6 fill-current text-gray-600" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-square" class="svg-inline--fa fa-pen-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z"></path></svg>
                        </a>
                        <a href="{{ route('qualification.delete', optional(optional(auth()->user()->student)->qualification)->id) }}" data-url="{!! URL::route('qualification.delete', optional(optional(auth()->user()->student)->qualification)->id) !!}" class="deletestudent ml-1 bg-gray-600 block p-1 border border-gray-600 rounded-sm">
                            <svg class="h-3 w-3 fill-current text-gray-100" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z"></path></svg>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @if($student->class && $student->class->subjects)
            <div class="w-full px-0 md:px-6 py-12">
                <div class="flex items-center bg-gray-200">
                    <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-semibold">Code</div>
                    <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-semibold">Subject</div>
                    <div class="w-1/3 text-right text-gray-600 py-2 px-4 font-semibold">Teacher</div>
                </div>
                @foreach ($student->class->subjects as $subject)
                    <div class="flex items-center justify-between border border-gray-200 -mb-px">
                        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ $subject->subject_code }}</div>
                        <div class="w-1/3 text-left text-gray-600 py-2 px-4 font-medium">{{ $subject->name }}</div>
                        <div class="w-1/3 text-right text-gray-600 py-2 px-4 font-medium">{{ $subject->teacher->user->name }}</div>
                    </div>
                @endforeach
            </div>
            @endif
            @if(count($student->attendances) > 0)
            <div class="w-full px-0 md:px-6 py-12">
                <div class="flex items-center bg-gray-200">
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-semibold">Date</div>
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-semibold">Class</div>
                    <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-semibold">Teacher</div>
                    <div class="w-1/4 text-right text-gray-600 py-2 px-4 font-semibold">attendance</div>
                </div>
                @foreach ($student->attendances as $attendance)
                    <div class="flex items-center justify-between border border-gray-200 -mb-px">
                        <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium">{{ $attendance->attendence_date }}</div>
                        <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium">{{ $attendance->class->class_name }}</div>
                        <div class="w-1/4 text-left text-gray-600 py-2 px-4 font-medium">{{ $attendance->teacher->user->name }}</div>
                        <div class="w-1/4 text-right text-gray-600 py-2 px-4 font-medium">
                            @if($attendance->attendence_status)
                                <span class="text-xs text-white bg-green-500 px-2 py-1 rounded">P</span>
                            @else
                                <span class="text-xs text-white bg-red-500 px-2 py-1 rounded">A</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>
