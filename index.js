import "dotenv/config";

import { Client } from "@notionhq/client";

const notion = new Client({ auth: process.env.NOTION_KEY }); // process.env.NOTION_KEY //'secret_Ad4eOPNW5UQCBVrLtBvXS7gWo5BmpC7D6axcMtA98uF'

const databaseId = process.env.NOTION_DATABASE_ID; // process.env.NOTION_DATABASE_ID //'6bcb428fdd264861ae224c80cbb75b73'

/* const notion = new Client({ auth: 'secret_Ad4eOPNW5UQCBVrLtBvXS7gWo5BmpC7D6axcMtA98uF' }) // process.env.NOTION_KEY //

const databaseId = '6bcb428fdd264861ae224c80cbb75b73' // process.env.NOTION_DATABASE_ID // */

/* async function addItem(text) {
  try {
    const response = await notion.pages.create({
      parent: { database_id: databaseId },
      properties: {
        title: { 
          title:[
            {
              "text": {
                "content": text
              }
            }
          ]
        }
      },
    })
    console.log(response)
    console.log("Success! Entry added.")
  } catch (error) {
    console.error(error.body)
  }
}

addItem("Yurts in Big Sur, California") */

async function retrieveDB() {
  const response = await notion.databases.query({ database_id: databaseId });

  const responseResults = response.results.map((page) => {
    return {
      id: page.id,
      name: page.properties.Name.title[0]?.plain_text,
      customer: page.properties.Cliente.rich_text[0]?.plain_text,
    };
  });
  //console.log(response);
  console.log(responseResults);
}
retrieveDB();

/* (async () => {
    //const databaseId = '668d797c-76fa-4934-9b05-ad288df2d136';
    const response = await notion.databases.retrieve({ database_id: databaseId });
    console.log(response);
  })(); */
