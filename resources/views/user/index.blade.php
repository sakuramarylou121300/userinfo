<tbody class="bg-white divide-y divide-gray-200">
    @foreach ($entities as $entity)
        {{-- this is for the first name --}}
        <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                    <div class="text-sm font-medium text-gray-900">
                        <p>{{$entity->first_name}}</p>
                    </div>
                    <div class="text-sm font-medium text-gray-900">
                        <p>{{$entity->last_name}}</p>
                    </div>
                </div>
            </td>

            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="/user/entities/{{$entity->id}}/edit" class="text-blue-500 hover:text-blue-600">
                    Edit
                </a>
            </td>

        </tr>
    @endforeach
</tbody>