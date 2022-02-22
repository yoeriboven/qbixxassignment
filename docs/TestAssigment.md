**Backend Assignment**

**As an** Admin  
**I want to** be able to CRUD clients  
**So that** I can manage the clients to the best of my abilities  


<ins>Description</ins>  
Currently it is only possible to add a new client but we want to be able to manage the clients we add as well. The view, edit and delete icons in the 'actions' column (which appear once there is at least 1 client added to the list) are not working yet.
We want to be able to add content to the client in different languages. It must be possible to view this content page in the language of choice, and it must be possible to delete the whole client with all their data.  
  
<ins>Specifications</ins>  
- Make the 'edit' icon work:
  - After adding a client, it must be possible to edit the client by clicking on the pencil icon.
  - When editing the client, it must be possible to add content:
    - Title
    - Paragraph
  - It must be possible to add the content in different languages, so that the user can choose a language they can understand:
    - English
    - Dutch
    - A language of choice  

- Make the 'view' icon work:
  - It must be possible to view the client by clicking on the eye icon.  
    - When viewing the client, the content must become visible on a different page
    - It must be possible to choose a language & switch between the different languages
    - When the client has no content yet, the view page of the client will be empty. What would you suggest to show in that situation?  
    - What if the client has no content for a certain language? How should we handle that situation?


- Make the 'delete' icon work:
  - It must be possible to delete the whole client with all their data. 
    - What would be the best workflow of deleting a client?  
  

________



**Frontend Assignment**

**As an** Admin  
**I want** the backoffice and client view to be visually appealing and userfriendly  
**So that** I can easily make use of the features without any frustrations

<ins>Description</ins>  
Currently the backoffice and client view are visually as simple as can be. Also there is not really paid any attention in particular to user friendliness. We would like to introduce this so that the product is easy and nice to work with.

<ins>Specifications</ins>  
- Make the backoffice and client view visually appealing and easy to work with (keep UX and Usability in mind).
  - Make use of the following methods:
    - Tailwind CSS
    - Vue JS
    - Inertia

