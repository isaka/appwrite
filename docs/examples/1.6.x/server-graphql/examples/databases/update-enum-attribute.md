mutation {
    databasesUpdateEnumAttribute(
        databaseId: "<DATABASE_ID>",
        collectionId: "<COLLECTION_ID>",
        key: "",
        elements: [],
        required: false,
        default: "<DEFAULT>",
        newKey: ""
    ) {
        key
        type
        status
        error
        required
        array
        elements
        format
        default
    }
}