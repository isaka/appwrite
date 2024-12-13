import { Client, Databases, RelationMutate } from "https://deno.land/x/appwrite/mod.ts";

const client = new Client()
    .setEndpoint('https://cloud.appwrite.io/v1') // Your API Endpoint
    .setProject('<YOUR_PROJECT_ID>') // Your project ID
    .setKey('<YOUR_API_KEY>'); // Your secret API key

const databases = new Databases(client);

const response = await databases.updateRelationshipAttribute(
    '<DATABASE_ID>', // databaseId
    '<COLLECTION_ID>', // collectionId
    '', // key
    RelationMutate.Cascade, // onDelete (optional)
    '' // newKey (optional)
);