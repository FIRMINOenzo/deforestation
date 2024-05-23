const defaultText = {
    text: {
        title: "Deforestation",
        home: "Home",
        authors: "Authors",
        footerCopy: "&copy; 2024 Meu Blog. Todos os direitos reservados.",
    },
};
export const en = {
    home: {
        text: {
            title: "Deforestation",
            home: "Home",
            authors: "Authors",
            footerCopy: "&copy; 2024 Meu Blog. Todos os direitos reservados.",
        },
        menus: {
            dropDownTitle: "Language",
        },
        inputs: {
            searchInput: "Search",
        },
    },
    post: {
        text: {
            ...defaultText.text,
            commentSection: "Comments",
            commentHeader: "Add a comment",
            comentNameField: "Name",
            comentCommentField: "Comment",
        },
        menus: {
            dropDownTitle: "Language",
        },
        inputs: {
            searchInput: "Search",
        },
        buttons: {
            comment: "Send Comment",
        },
    },
};
