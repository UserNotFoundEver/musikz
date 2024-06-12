async function uploadDataToStarkwareAndAssociateWithLens(data, lensProfileId) {
  // Upload data to Starkware
  const starkwareResponse = await starknet.upload(data);
  
  // Check the response from Starkware
  if (starkwareResponse.status !== 'success') {
    throw new Error('Failed to upload data to Starkware');
  }

  // Get the data ID from Starkware response
  const starkwareDataId = starkwareResponse.data.id;

  // Create a new post on Lens associating with the Starkware data ID
  const lensPostResponse = await lensClient.createPost({
    profileId: lensProfileId,
    content: `Data uploaded to Starkware with ID: ${starkwareDataId}`,
    tags: ['Starkware', 'Lens']
  });

  return lensPostResponse;
}

// Example usage
const data = 'Some important data to be stored on Starkware';
const lensProfileId = 'your-lens-profile-id';

uploadDataToStarkwareAndAssociateWithLens(data, lensProfileId)
  .then(response => console.log('Post created on Lens:', response))
  .catch(error => console.error('Error:', error));
