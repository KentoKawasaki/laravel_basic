<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            お問い合わせ一覧
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="lg:px-10 p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-rows-2 grid-cols-4 gap-4 my-10 text-center">
                        <div class="flex items-center justify-start ...">
                            <h3 class="font-bold text-lg">Index</h3>
                        </div>
                        <div class=" row-start-2 md:col-start-2 md:col-span-2 col-span-4 ...">
                            <form class="grid grid-cols-6 gap-3" action="{{ route('contacts.index') }}" method="get">
                                <input class="md:col-span-4 col-span-6" type="text" name="search" value="{{ $search }}" placeholder="氏名を入力してください">
                                <button class="md:mt-0 md:col-span-2 mt-3 col-start-3 col-span-2 text-white bg-indigo-500 border-0 py-2 px-4 focus:outline-none hover:bg-indigo-600 rounded">検索</button>
                            </form>
                        </div>
                        <div class="flex items-center justify-end col-start-4 col-span-1 ..."><a href="{{ route('contacts.create') }}" class="text-blue-500">新規登録</a></div>
                    </div>

                    @if($noquery['isDisplay'])
                    <div class="text-center text-red-500 mt-5">
                        {{ $noquery['message'] }}
                    </div>

                    @else
                    <div class="lg:w-2/3 w-full mx-auto mb-5 overflow-auto">
                        <table class="table-auto w-full text-left whitespace-no-wrap">
                            <thead>
                                <tr>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">ID</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">氏名</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">件名</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">登録日</th>
                                    <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">詳細</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->id }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->name }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3">{{ $contact->title }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900">{{ $contact->created_at }}</td>
                                    <td class="border-t-2 border-gray-200 px-4 py-3 text-lg text-gray-900"><a class="text-blue-500" href="{{ route('contacts.show', ['id' => $contact->id]) }}">詳細を見る</a></td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    @endif
                    {{ $contacts->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>