<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

@isset($records)
======== Records ====================
<table>
      <tr>
        <th>Record Id</th>
        <th>Record Name</th>
      </tr>
     @foreach($records as $record)
         <tr>
            <td>{{ $record->id}} --- 
            
            </td>
            <td>{{ $record->name}}</td></td>
            
          </tr>
    @endforeach
    </table>
@endisset


@isset($fields)
======== Fields ====================
<table>
      <tr>
        <th>Field Id</th>
        <th>Field Name</th>
      </tr>
     @foreach($fields as $field)
        <tr>
            <td>{{ $field->id}}</td>
            <td>{{ $field->name}}</td></td>
            
          </tr>
    @endforeach
@endisset

@isset($pivotRecords)
======== Pivot Table (record_field) Record To Field Relationship ====================
<table>
      <tr>
        <th> Pivot Field Id</th>
        <th> Pivot Field Name</th>
        <th> Pivot Record Id</th>
        <th> Pivot Value</th>
      </tr>
     @foreach($pivotRecords as $record)
        @foreach($record->fields as $field)
          <tr>
              <td>{{ $field->id}}</td>
              <td>{{ $field->name}}</td>
              <td>{{ $field->pivot->record_id}}</td>
              <td>{{ $field->pivot->value}}</td>
            </tr>
        @endforeach
        
    @endforeach
@endisset
@isset($allFields)
========  All the fields 
(same as doing "Field->all()", but include the "value" from the pivot table for a specific record id ====================
<table>
      <tr>
        <th> Field Id</th>
        <th> Field Name</th>
        <th> Pivot Record Id</th>
        <th> Pivot Value</th>
      </tr>
     @foreach($allFields as $field)
       <tr>
          <td> {{ $field->id }}</td>
          <td> {{ $field->name }}</td>
          <td> {{ $field->record_id }}</td>
          <td> {{ $field->value }}</td>
       </tr>
        
    @endforeach
@endisset

