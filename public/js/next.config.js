export async function headers() {
    return [{
        source: '/:path',
        headers: [
            {
                key: 'Acess-Control-Allow-Credentials', value: 'true'
            },
            {
                key: 'Acess-Control-Allow-Origin', value: '*'
            },
            {
                key: 'Acess-Control-Allow-Methods', value: 'GET,POST,PUT,DELETE,OPTIONS,PATCH'
            },
            {
                key: 'Acess-Control-Allow-Headers', value: 'X-CSRF-Token, X-Requested-With'
            }
        ]
    }
    ];
}