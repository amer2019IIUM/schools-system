<?php


$types = [
    'Administrator' => 'administrator',
    'Announcement'  => 'announcement',
    'Assignment'    => 'assignment',
    'Center'        => 'center',
    'Course'        => 'course',
    'Department'    => 'department',
    'Grade'         => 'grade',
    'Inquiry'       => 'inquiry',
    'Report'        => 'report',
    'School'        => 'school',
    'Student'       => 'student',
    'Submission'    => 'submission',
    'Teacher'       => 'teacher'
];

foreach ( $types as $type => $type_query )
{
    $graphql_file = fopen( __DIR__ . "/graphql/entitiesSchema/$type_query.graphql", "w" );

    $content = <<<EOT
    extend type Mutation {
        create{$type}(input: Create{$type}Input! @spread): {$type} @create
    
        update{$type}(id: ID!, input: Update{$type}Input! @spread): {$type} @update
    
        delete{$type}(id: ID!): {$type} @delete
    
        restore{$type}(id: ID!): {$type} @restore
    }
    extend type Query {
        {$type_query}s (
            orderBy: _ @orderBy(columnsEnum: "{$type}Columns")
            where: _ @whereConditions(columnsEnum: "{$type}Columns")
            taxonomyContents: _
                @whereHasConditions(columnsEnum: "TaxonomyContentColumns")
        ): [{$type}!]! @softDeletes @paginate(type: PAGINATOR, defaultCount: 10)
    
        {$type_query} (
            where: _ @whereConditions(columnsEnum: "{$type}Columns")
            taxonomyContents: _ @whereHasConditions(columnsEnum: "TaxonomyContentColumns")
        ): {$type} @first
    }
    
    type {$type} {
        id: ID!
        sku: String!
        title: String!
        description: String
        price: Float!
        negotiable: Boolean
        status: Int
        deleted_at: DateTime
        created_at: DateTime
        updated_at: DateTime
        user: User @belongsTo
        comments: [Comment!]! @hasMany(type: PAGINATOR, defaultCount: 10)
        taxonomyContents: [TaxonomyContent!]!
        @belongsToMany(type: PAGINATOR, defaultCount: 10)
        reports: [Report!]! @morphMany(type: PAGINATOR, defaultCount: 10)
        attachments: [Attachment!]! @morphMany(type: PAGINATOR, defaultCount: 10)
        metadata: [Metadata!]! @morphMany(type: PAGINATOR, defaultCount: 10)
        favorite: Favorite @morphOne
        reviews: [Review!]! @morphMany(type: PAGINATOR, defaultCount: 10)
    }

    enum {$type}Columns {
        ID
        NAME
        EMAIL
        EMAIL_VERIFIED_AT
        PASSWORD
        PHONE_NO
        GENDER
        CONFIRMED_AT
        REMEMBER_TOKEN
        DELETED_AT
        CREATED_AT
        UPDATED_AT
    }
    
    input Create{$type}Input @validator {
        title: String
        description: String
        price: Float
        negotiable: Boolean
        status: Int
        user: CreateUserBelongsTo
        taxonomyContents: CreateTaxonomyContentBelongsToMany
        attachments: CreateAttachmentBelongsToMany
    }
    input Update{$type}Input @validator {
        title: String
        description: String
        price: Float
        attachments: CreateAttachmentBelongsToMany
    }
    input CreateUserBelongsTo {
        connect: ID
    }
    input CreateTaxonomyContentBelongsToMany {
        connect: [ID!]
    }
    input CreateAttachmentBelongsToMany {
        connect: [ID!]
        create: [CreateAttachmentHasManyInputs]
        delete: [ID!]
        connect: [ID!]
        disconnect: [ID!]
    }
    input Delete{$type}Input {
        delete: ID
    }
    input CreateAttachmentHasManyInputs {
        path: String
        disk_name: String
        type: AttachmentTypes!
        file_name: String
        thumbnail: Boolean
    }
    EOT;
    fwrite( $graphql_file, $content );
    fclose( $graphql_file );

}
