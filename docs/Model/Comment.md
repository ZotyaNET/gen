# # Comment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**author** | [**\OpenAPI\Client\Model\CommentAuthor**](CommentAuthor.md) |  | [optional]
**body** | **string** | The comment text. | [optional]
**created** | **\DateTime** | The date and time at which the comment was created. | [optional] [readonly]
**id** | **string** | The ID of the comment. | [optional] [readonly]
**jsd_author_can_see_request** | **bool** | Whether the comment was added from an email sent by a person who is not part of the issue. See [Allow external emails to be added as comments on issues](https://support.atlassian.com/jira-service-management-cloud/docs/allow-external-emails-to-be-added-as-comments-on-issues/)for information on setting up this feature. | [optional] [readonly]
**jsd_public** | **bool** | Whether the comment is visible in Jira Service Desk. Defaults to true when comments are created in the Jira Cloud Platform. This includes when the site doesn&#39;t use Jira Service Desk or the project isn&#39;t a Jira Service Desk project and, therefore, there is no Jira Service Desk for the issue to be visible on. To create a comment with its visibility in Jira Service Desk set to false, use the Jira Service Desk REST API [Create request comment](https://developer.atlassian.com/cloud/jira/service-desk/rest/#api-rest-servicedeskapi-request-issueIdOrKey-comment-post) operation. | [optional] [readonly]
**properties** | [**\OpenAPI\Client\Model\EntityProperty[]**](EntityProperty.md) | A list of comment properties. Optional on create and update. | [optional]
**rendered_body** | **string** | The rendered version of the comment. | [optional] [readonly]
**self** | **string** | The URL of the comment. | [optional] [readonly]
**update_author** | [**\OpenAPI\Client\Model\CommentUpdateAuthor**](CommentUpdateAuthor.md) |  | [optional]
**updated** | **\DateTime** | The date and time at which the comment was updated last. | [optional] [readonly]
**visibility** | [**\OpenAPI\Client\Model\CommentVisibility**](CommentVisibility.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
