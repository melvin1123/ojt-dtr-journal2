import React from 'react';
import ComponentCreator from '@docusaurus/ComponentCreator';

export default [
  {
    path: '/docs/blog',
    component: ComponentCreator('/docs/blog', 'e9e'),
    exact: true
  },
  {
    path: '/docs/blog/archive',
    component: ComponentCreator('/docs/blog/archive', '5ff'),
    exact: true
  },
  {
    path: '/docs/blog/authors',
    component: ComponentCreator('/docs/blog/authors', '164'),
    exact: true
  },
  {
    path: '/docs/blog/authors/all-sebastien-lorber-articles',
    component: ComponentCreator('/docs/blog/authors/all-sebastien-lorber-articles', '5f1'),
    exact: true
  },
  {
    path: '/docs/blog/authors/yangshun',
    component: ComponentCreator('/docs/blog/authors/yangshun', 'f7a'),
    exact: true
  },
  {
    path: '/docs/blog/first-blog-post',
    component: ComponentCreator('/docs/blog/first-blog-post', '451'),
    exact: true
  },
  {
    path: '/docs/blog/long-blog-post',
    component: ComponentCreator('/docs/blog/long-blog-post', '135'),
    exact: true
  },
  {
    path: '/docs/blog/mdx-blog-post',
    component: ComponentCreator('/docs/blog/mdx-blog-post', '369'),
    exact: true
  },
  {
    path: '/docs/blog/tags',
    component: ComponentCreator('/docs/blog/tags', 'a37'),
    exact: true
  },
  {
    path: '/docs/blog/tags/docusaurus',
    component: ComponentCreator('/docs/blog/tags/docusaurus', '987'),
    exact: true
  },
  {
    path: '/docs/blog/tags/facebook',
    component: ComponentCreator('/docs/blog/tags/facebook', 'a94'),
    exact: true
  },
  {
    path: '/docs/blog/tags/hello',
    component: ComponentCreator('/docs/blog/tags/hello', '941'),
    exact: true
  },
  {
    path: '/docs/blog/tags/hola',
    component: ComponentCreator('/docs/blog/tags/hola', 'ae4'),
    exact: true
  },
  {
    path: '/docs/blog/welcome',
    component: ComponentCreator('/docs/blog/welcome', 'f3f'),
    exact: true
  },
  {
    path: '/docs/markdown-page',
    component: ComponentCreator('/docs/markdown-page', 'c78'),
    exact: true
  },
  {
    path: '/docs/docs',
    component: ComponentCreator('/docs/docs', '128'),
    routes: [
      {
        path: '/docs/docs',
        component: ComponentCreator('/docs/docs', '85f'),
        routes: [
          {
            path: '/docs/docs',
            component: ComponentCreator('/docs/docs', '5d6'),
            routes: [
              {
                path: '/docs/docs/Admin Certification and Audit Logs',
                component: ComponentCreator('/docs/docs/Admin Certification and Audit Logs', '7c2'),
                exact: true,
                sidebar: "tutorialSidebar"
              },
              {
                path: '/docs/docs/Daily Time Record',
                component: ComponentCreator('/docs/docs/Daily Time Record', '3c2'),
                exact: true,
                sidebar: "tutorialSidebar"
              },
              {
                path: '/docs/docs/Export Feature',
                component: ComponentCreator('/docs/docs/Export Feature', '927'),
                exact: true,
                sidebar: "tutorialSidebar"
              },
              {
                path: '/docs/docs/Weekly Journal',
                component: ComponentCreator('/docs/docs/Weekly Journal', '78f'),
                exact: true,
                sidebar: "tutorialSidebar"
              }
            ]
          }
        ]
      }
    ]
  },
  {
    path: '/docs/',
    component: ComponentCreator('/docs/', '6fa'),
    exact: true
  },
  {
    path: '*',
    component: ComponentCreator('*'),
  },
];
