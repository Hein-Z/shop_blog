const searchClient = algoliasearch('0QNYWTOCLU', '9ba5f4881a8285e2f3e71e5d5bfa710c');

const search = instantsearch({
    indexName: 'demo_ecommerce',
    searchClient,
});

search.addWidgets([
    instantsearch.widgets.searchBox({
        container: '#searchbox',
    }),

    instantsearch.widgets.hits({
        container: '#hits',
    })
]);

search.start();