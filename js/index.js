function StorageFunction()
{
    var retrievedObject = localStorage.getItem('APIKeyStorage');
    document.getElementById('APIKey').value = retrievedObject;
    document.getElementById('ChangeText').innerHTML = retrievedObject;
    document.getElementById('APIKeyDistance').value = retrievedObject;
    document.getElementById('APIKeyNearby').value = retrievedObject;
    document.getElementById('APIKeyAddress').value = retrievedObject;
    document.getElementById('APIKeyCity').value = retrievedObject;
    document.getElementById('APIKeyCities').value = retrievedObject;
    document.getElementById('APIKeyIP-Location').value = retrievedObject;
    document.getElementById('APIKeyLegacy').value = retrievedObject;
    document.getElementById('APIKeyAddressAuto').value = retrievedObject;
    document.getElementById('APIKeyCityAuto').value = retrievedObject;
}

function setKey() {
    var CurrentKey = document.getElementById('APIKey').value;
    document.getElementById('ChangeText').innerHTML = CurrentKey;
    document.getElementById('APIKeyDistance').value = CurrentKey;
    document.getElementById('APIKeyNearby').value = CurrentKey;
    document.getElementById('APIKeyAddress').value = CurrentKey;
    document.getElementById('APIKeyCity').value = CurrentKey;
    document.getElementById('APIKeyCities').value = CurrentKey;
    document.getElementById('APIKeyIP-Location').value = CurrentKey;
    document.getElementById('APIKeyLegacy').value = CurrentKey;
    document.getElementById('APIKeyAddressAuto').value = CurrentKey;
    document.getElementById('APIKeyCityAuto').value = CurrentKey;
    localStorage.setItem('APIKeyStorage', CurrentKey);
}