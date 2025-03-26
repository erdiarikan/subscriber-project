<template>
  <form method="POST" action="/subscribers" class="m-6 space-y-4 max-w-md">
    <input type="hidden" name="_token" :value="csrf" />

    <div>
      <label for="email" class="block font-medium mb-1">Email</label>
      <input
          id="email"
          type="email"
          name="email"
          v-model="form.email"
          required
          class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
      />
    </div>

    <div>
      <label for="status" class="block font-medium mb-1">Status</label>
      <select
          id="status"
          name="status"
          v-model="form.status"
          required
          class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"
      >

        <!-- This part can be refactored with Enums -->
        <option value="">Select a status</option>
        <option value="subscribed">Subscribed</option>
        <option value="unsubscribed">Unsubscribed</option>
      </select>
    </div>

    <button
        type="submit"
        class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition"
    >
      Add Subscriber
    </button>
  </form>
</template>

<script>
export default {
  name: 'SubscriberForm',
  data() {
    return {
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
      form: {
        email: '',
        status: '',
      },
    }
  },
}
</script>
